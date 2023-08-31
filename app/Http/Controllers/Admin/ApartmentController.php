<?php

namespace App\Http\Controllers\Admin;

use App\Models\View;
use App\Models\Image;
use App\Models\Address;
use App\Models\Service;
use App\Models\Apartment;
use App\Models\Sponsorship;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ApartmentController extends Controller
{
    private array $validations = [
        'name' => 'required|string|max:200',
        'rooms' => 'required|integer|min:1',
        'beds' => 'required|integer|min:1',
        'bathrooms' => 'required|integer|min:1',
        'square_meters' => 'required|integer|min:1',
        'address' => 'array',
        'address.*.street' => 'required|string|max:200',
        'address.*.city' => 'required|string|max:100',
        'address.*.zip' => 'required|string|max:10',
        'services' => 'array',
        'images' => 'array',
        'images.*.image_path' => 'string',
        'images.*.is_cover' => 'required|boolean',
    ];

    private $validations_messages = [
        'required' => 'Field :attribute is required.',
        'max' => 'Field :attribute must have max :max chars.',
        'min' => 'Field :attribute must have min :min chars.',
    ];

    public function index()
    {
        $user = Auth::user();
        $apartments = Apartment::where('user_id', $user->id)->with('user')->get();

        return view('admin.apartments.index', compact('apartments'));
    }


    public function create()
    {
        $services = Service::all();
        return view('Admin.apartments.create', compact('services'));
    }


    public function store(Request $request)
    {

        $user = Auth::user();

        $request->validate($this->validations, $this->validations_messages);
        $validatedData = $request->all();

        // Salvare i dati nel database per gli apartment
        $newApartment = new apartment();
        $newApartment->name = $validatedData['name'];
        $newApartment->slug = Str::slug($newApartment->name);
        $newApartment->user_id = $user->id;
        $newApartment->rooms = $validatedData['rooms'];
        $newApartment->beds = $validatedData['beds'];
        $newApartment->bathrooms = $validatedData['bathrooms'];
        $newApartment->square_meters = $validatedData['square_meters'];
        $newApartment->save();

        if ($validatedData['services']) {
            $services = array_values($validatedData['services']);

            $newApartment->services()->sync($services);
        }

        // istanza per gli address

        $newAddress = new Address();
        $newAddress->street = $validatedData['street'];
        $newAddress->city = $validatedData['city'];
        $newAddress->zip = $validatedData['zip'];

        $newAddress->apartment()->associate($newApartment);
        $newAddress->save();

        // Handle image upload and storage
        if ($request->hasFile('images')) {
            $images = [];
            $counter = 1;

            foreach ($request->file('images') as $imageFile) {
                $extension = $imageFile->getClientOriginalExtension();
                $imageName = "{$newApartment->id}-" . Str::slug($newApartment->name) . "_{$counter}" . ".{$extension}";
                // Store the image in the "public" disk (you can configure this in config/filesystems.php)
                $imagePath = $imageFile->storeAs('apartment_images', $imageName, 'public');

                if ($counter == 1) {
                    $images[] = [
                        'image_path' => $imagePath,
                        'is_cover' => true,
                    ];
                } else {
                    $images[] = [
                        'image_path' => $imagePath,
                        'is_cover' => false,
                    ];
                }

                $counter++;
            }

            // Associate images with the apartment
            $newApartment->images()->createMany($images);
        }

        return redirect()->route('admin.apartments.index', ['apartment' => $newApartment]);
    }


    public function show($id)
    {
        $apartment = Apartment::where('id', $id)->firstOrFail();
        return compact('apartment');
    }


    public function edit($id)
    {
        $apartment = Apartment::with('address', 'user', 'services', 'images')->find($id);
        $services = Service::all();
        return view('admin.apartments.edit', compact('apartment', 'services'));
    }


    public function update(Request $request, int $id)
    {
        $apartment = Apartment::findOrFail($id);

        $request->validate($this->validations, $this->validations_messages);
        $validatedData = $request->all();

        $apartment->update([
            'name' => $validatedData['name'],
            'slug' => Str::slug($validatedData['name']),
            'rooms' => $validatedData['rooms'],
            'beds' => $validatedData['beds'],
            'bathrooms' => $validatedData['bathrooms'],
            'square_meters' => $validatedData['square_meters'],
        ]);

        if ($validatedData['services']) {
            $services = array_values($validatedData['services']);

            $apartment->services()->sync($services);
        }

        $apartment->address()->update([
            'street' => $validatedData['street'],
            'city' => $validatedData['city'],
            'zip' => $validatedData['zip'],
        ]);

        // Handle image updates
        if ($request->hasFile('images')) {
            // Remove existing images, if needed
            $apartment->images()->delete();

            // Process and store new images
            $images = [];
            $counter = 1;

            foreach ($request->file('images') as $imageFile) {
                $extension = $imageFile->getClientOriginalExtension();
                $imageName = "{$apartment->id}-" . Str::slug($apartment->name) . "_{$counter}" . ".{$extension}";
                $imagePath = $imageFile->storeAs('apartment_images', $imageName, 'public');

                if ($counter == 1) {
                    $images[] = [
                        'image_path' => $imagePath,
                        'is_cover' => true,
                    ];
                } else {
                    $images[] = [
                        'image_path' => $imagePath,
                        'is_cover' => false,
                    ];
                }

                $counter++;
            }

            // Associate images with the apartment
            $apartment->images()->createMany($images);
        }

        return redirect()->route('admin.apartments.index')->with('success', 'Apartment updated successfully');
    }


    public function destroy($slug)
    {
        $apartment = Apartment::where('slug', $slug)->firstOrFail();

        $apartment->delete();

        return to_route('admin.apartments.index')->with('delete_success', $apartment);
    }
}
