<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index()
    {
        $apartments = Apartment::all();
        return response()->json($apartments);
    }

    public function show($slug)
    {
        $apartment = Apartment::with('image', 'address', 'sponsorship', 'services')->where('slug', $slug)->firstOrFail();
        return response()->json([
            'results'   => $apartment,
        ]);
    }
}
