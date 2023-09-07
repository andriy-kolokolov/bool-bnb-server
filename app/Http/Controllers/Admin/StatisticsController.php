<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatisticsController extends Controller
{
    public function index(Apartment $apartment) {
        $user = Auth::user();
        return view('admin.apartments.statistics.index',
            compact('apartment', 'user'));
    }
}
