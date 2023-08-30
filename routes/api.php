<?php

use App\Http\Controllers\Admin\ApartmentController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// register endpoint // http://127.0.0.1:8000/api/register
Route::post("auth/register", [UserController::class, 'register']);
// login endpoint // http://127.0.0.1:8000/api/login
Route::post("auth/login", [UserController::class, 'login']);

// retrieve all messages related to a user // http://127.0.0.1:8000/api/users/{user}/messages
Route::get('users/{user}/messages', [UserController::class, 'getUserMessages']);

Route::prefix('apartments')->group(function () {
    // CRUDS
    // retrieve all apartments // http://127.0.0.1:8000/api/apartments/all
    Route::get('/', [ApartmentController::class, 'index']);
    //  retrieve apartment by id  http://127.0.0.1:8000/api/apartments/{id}
    Route::get('/{id}', [ApartmentController::class, 'show']);
    //  add apartment // method POST http://127.0.0.1:8000/api/apartments/
    Route::post('/', [ApartmentController::class, 'store']);
    //  update apartment // method PUT http://127.0.0.1:8000/api/apartments/{id}
    Route::put('/{id}', [ApartmentController::class, 'update']);
    //  delete apartment // method DELETE http://127.0.0.1:8000/api/apartments/{id}
    Route::delete('/{id}', [ApartmentController::class, 'destroy']);



    //  retrieve apartments images // http://127.0.0.1:8000/api/apartments/{id}/images
    Route::get('/{id}/images', [ApartmentController::class, 'getImages']);
    // retrieve all services related to apartment // http://127.0.0.1:8000/api/apartments/{id}/services
    Route::get('/{id}/services', [ApartmentController::class, 'getServices']);
    //  retrieve apartments views // http://127.0.0.1:8000/api/apartments/{id}/views
    Route::get('/{id}/views', [ApartmentController::class, 'getViews']);
    //  retrieve apartments images // http://127.0.0.1:8000/api/apartments/{id}/messages
    Route::get('/{id}/messages', [ApartmentController::class, 'getMessages']);
    //  retrieve apartments ordered by availability // http://127.0.0.1:8000/api/apartments/ordered-by-availability
    Route::get('/ordered-by-availability', [ApartmentController::class, 'getAllOrderedByAvailability']);
    //  retrieve apartments ordered by sponsor // http://127.0.0.1:8000/api/apartments/ordered-by-sponsorship
    Route::get('/ordered-by-sponsorship', [ApartmentController::class, 'getAllOrderedBySponsorship']);
});

