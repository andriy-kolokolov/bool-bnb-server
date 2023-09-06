<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\Sponsorship;
use Illuminate\Http\Request;

class SponsorshipController extends Controller
{
    public function index() {
        $sponsorships = Sponsorship::all();
        return view('admin.sponsorship.index', compact('sponsorships'));
    }
}
