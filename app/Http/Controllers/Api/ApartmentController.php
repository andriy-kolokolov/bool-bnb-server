<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        /*
         * sorting params -> order_direction = 'asc' / 'desc'
         *                   sort_by = 'sponsor' / 'availability'
         */

        // Get the request parameters for sorting
        $sortBy = $request->get('sort_by', 'sponsor'); // Default to sorting by sponsor if not specified
        $orderDirection = $request->get('order_direction', 'desc');
        $orderColumn = 'is_sponsored';
        //        $orderDirection = 'DESC';
        if ($sortBy === 'availability') {
            $orderColumn = 'is_available';
            //$orderDirection = 'DESC'; // Change to 'ASC' if you want availability in descending order
        }
        // Fetch apartments with the specified order
        $apartments = Apartment::with(['user', 'address', 'services', 'images', 'views', 'sponsorships'])
            ->orderBy($orderColumn, $orderDirection)
            ->get();

        return response()->json($apartments);
    }

    public function show($id): JsonResponse
    {
        $apartment = Apartment::with(['user', 'address', 'services', 'images', 'messages', 'views', 'sponsorships'])
            ->find($id);
        if (!$apartment) {
            return response()->json(['message' => 'Apartment not found'], 404);
        }
        return response()->json($apartment);
    }

    // END CRUDS

    public function getAllOrderedByAvailability(): JsonResponse
    {
        $apartments = Apartment::with(['user', 'address', 'services', 'images', 'views'])
            ->orderBy('is_available', 'desc')
            ->get();

        return response()->json($apartments);
    }

    public function getAllOrderedBySponsorship(): JsonResponse
    {
        $apartments = Apartment::with(['user', 'address', 'services', 'images', 'views'])
            ->orderByDesc('is_sponsored')
            ->get();

        return response()->json($apartments);
    }

    public function getImages($id): JsonResponse
    {
        $images = Apartment::find($id)->images;

        if (!$images) {
            return response()->json(['message' => 'Apartment images not found'], 404);
        }

        return response()->json($images);
    }

    public function getServices($id): JsonResponse
    {
        $services = Apartment::find($id)->services;

        if (!$services) {
            return response()->json(['message' => 'Apartment services not found'], 404);
        }

        return response()->json($services);
    }

    public function getViews($id): JsonResponse
    {
        $views = Apartment::find($id)->views;

        if (!$views) {
            return response()->json(['message' => 'Apartment views not found'], 404);
        }

        return response()->json($views);
    }

    public function getMessages($id): JsonResponse
    {
        $apartment = Apartment::with('messages')->find($id);

        if (!$apartment) {
            return response()->json(['message' => 'Apartment not found'], 404);
        }

        $messages = $apartment->messages;

        return response()->json($messages);
    }

    public function apartmentsInRadius(Request $request)
    {
        // Get latitude, longitude, and radius from the request parameters
        $latitude = $request->input('lat');
        $longitude = $request->input('lon');
        $radius = $request->input('radius');

        $earthRadius = 6371; // Earth's radius in kilometers
        $apartments = Apartment::select('apartments.*')
            ->selectRaw(
                "( $earthRadius * acos(
                cos( radians($latitude) )
                * cos( radians( addresses.latitude ) )
                * cos( radians( addresses.longitude ) - radians($longitude) )
                + sin( radians($latitude) )
                * sin( radians( addresses.latitude ) )
            )) AS distance"
            )
            ->join('addresses', 'apartments.id', '=', 'addresses.apartment_id')
            ->whereRaw("( $earthRadius * acos(
                cos( radians($latitude) )
                * cos( radians( addresses.latitude ) )
                * cos( radians( addresses.longitude ) - radians($longitude) )
                + sin( radians($latitude) )
                * sin( radians( addresses.latitude ) )
            )) <= ?", [$radius])
            ->orderBy('distance')
            ->with(['user', 'address', 'services', 'images', 'messages', 'views', 'sponsorships'])
            ->get();
        return response()->json($apartments);
    }
}
