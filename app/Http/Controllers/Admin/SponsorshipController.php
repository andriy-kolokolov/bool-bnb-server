<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\Sponsorship;
use Illuminate\Support\Facades\Auth;

class SponsorshipController extends Controller
{
    public function index($id) {
        $apartment = Apartment::where('id', $id)
            ->with('sponsorships')
            ->first();
        $user = Auth::user();
        $availableSponsorships = Sponsorship::all();
        return view('admin.apartments.sponsorship.index', compact('availableSponsorships', 'user', 'apartment'));
    }
}
