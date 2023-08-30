<?php


use App\Http\Controllers\Api\ApartmentController as ApiApartmentController;
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

Route::prefix('apartments')->group(function () {
    // CRUDS
    // retrieve all apartments // http://127.0.0.1:8000/api/apartments/all
    Route::get('/', [ApiApartmentController::class, 'index']);
    //  retrieve apartment by id  http://127.0.0.1:8000/api/apartments/{id}
    Route::get('/{id}', [ApiApartmentController::class, 'show']);
    //  add apartment // method POST http://127.0.0.1:8000/api/apartments/
    Route::post('/', [ApiApartmentController::class, 'store']);
    //  update apartment // method PUT http://127.0.0.1:8000/api/apartments/{id}
    Route::put('/{id}', [ApiApartmentController::class, 'update']);
    //  delete apartment // method DELETE http://127.0.0.1:8000/api/apartments/{id}
    Route::delete('/{id}', [ApiApartmentController::class, 'destroy']);



    //  retrieve apartments images // http://127.0.0.1:8000/api/apartments/{id}/images
    Route::get('/{id}/images', [ApiApartmentController::class, 'getImages']);
    // retrieve all services related to apartment // http://127.0.0.1:8000/api/apartments/{id}/services
    Route::get('/{id}/services', [ApiApartmentController::class, 'getServices']);
    //  retrieve apartments views // http://127.0.0.1:8000/api/apartments/{id}/views
    Route::get('/{id}/views', [ApiApartmentController::class, 'getViews']);
    //  retrieve apartments images // http://127.0.0.1:8000/api/apartments/{id}/messages
    Route::get('/{id}/messages', [ApiApartmentController::class, 'getMessages']);
    //  retrieve apartments ordered by availability // http://127.0.0.1:8000/api/apartments/ordered-by-availability
    Route::get('/ordered-by-availability', [ApiApartmentController::class, 'getAllOrderedByAvailability']);
    //  retrieve apartments ordered by sponsor // http://127.0.0.1:8000/api/apartments/ordered-by-sponsorship
    Route::get('/ordered-by-sponsorship', [ApiApartmentController::class, 'getAllOrderedBySponsorship']);
});

