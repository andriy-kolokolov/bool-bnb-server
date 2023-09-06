<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\Sponsorship;
use Illuminate\Support\Facades\Auth;

class SponsorshipController extends Controller
{
    public function index() {
        $user = Auth::user();
        $apartments = Apartment::where('user_id', $user->id)
            ->with(['user', 'sponsorships'])
            ->get();
        $sponsorships = Sponsorship::all();
        return view('admin.sponsorship.index', compact('sponsorships', 'apartments'));
    }
}
