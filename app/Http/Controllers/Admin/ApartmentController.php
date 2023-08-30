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

class ApartmentController extends Controller {
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
        $apartments = Apartment::all();

        return view('admin.apartments.index', compact('apartments'));
    }


    public function create() {
        $services = Service::all();
        return view('Admin.apartments.create', compact('services'));
    }


    public function store(Request $request) {

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

                $images[] = [
                    'image_path' => $imagePath,
                    'is_cover' => false,
                ];
                $counter++;
            }

            // Associate images with the apartment
            $newApartment->images()->createMany($images);
        }

        return redirect()->route('admin.apartments.index', ['apartment' => $newApartment]);
    }


    public function show($id) {
        $apartment = Apartment::where('id', $id)->firstOrFail();
        return view('admin.apartments.show', compact('apartment'));
    }


    public function edit($slug) {
        $apartment = Apartment::where('slug', $slug)->firstOrFail();
        $services = Service::all();
        $images = Image::all();
        $addresses = Address::all();
        $views = View::all();
        $sponsorships = Sponsorship::all();
        return view('admin.apartments.edit', compact('apartment', 'utilities', 'images', 'addresses', 'views', 'sponsors'));
    }


    public function update(Request $request, $slug) {
        $apartment = Apartment::where('slug', $slug)->firstOrFail();
        $request->validate($this->validations, $this->validations_messages);
        $data = $request->all();

        // if ($request->has('image_id')) {
        //     $imagePath = Storage::disk('public')->put('uploads', $data['image_id']);
        //     if ($apartment->image_id) {
        //         Storage::delete($apartment->image_id);
        //     }
        //     $apartment->image_id = $imagePath;
        // }

        $apartment->title = $data['title'];
        $apartment->address_id = $data['address_id'];
        $apartment->user_id = $data['user_id'];
        $apartment->rooms = $data['rooms'];
        $apartment->beds = $data['beds'];
        $apartment->bathrooms = $data['bathrooms'];
        $apartment->square_meters = $data['square_meters'];
        $apartment->available = $data['available'];
        $apartment->update();

        $apartment->services()->sync($data['services'] ?? []);
        $apartment->sponsors()->sync($data['sponsors'] ?? []);

        return redirect()->route('admin.apartments.show', ['apartment' => $apartment]);
    }


    public function destroy($slug) {
        $apartment = Apartment::where('slug', $slug)->firstOrFail();

        $apartment->delete();

        return to_route('admin.apartments.index')->with('delete_success', $apartment);
    }

    public function restore($slug) {
        $apartment = Apartment::find($slug);
        Apartment::withTrashed()->where('slug', $slug)->restore();
        $apartment = Apartment::where('slug', $slug)->firstOrFail();


        return to_route('admin.apartments.trashed')->with('restore_success', $apartment);
    }

    public function cancel($slug) {
        $apartment = Apartment::find($slug);
        Apartment::withTrashed()->where('slug', $slug)->restore();
        $apartment = Apartment::where('slug', $slug)->firstOrFail();


        return to_route('admin.apartments.index')->with('cancel_success', $apartment);
    }

    public function trashed() {
        $trashedApartments = Apartment::onlyTrashed()->paginate(5);

        return view('admin.apartments.trashed', compact('trashedApartments'));
    }

    public function harddelete($slug) {
        $apartment = Apartment::withTrashed()->where('slug', $slug)->first();

        if ($apartment->file) {
            Storage::delete($apartment->file);
        }
        // se ho il trashed lo inserisco nel harddelete

        $apartment->utilities()->detach();
        $apartment->forceDelete();
        return to_route('admin.apartments.trashed')->with('delete_success', $apartment);
    }
}
