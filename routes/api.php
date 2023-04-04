<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PetitionController;
use App\Http\Resources\AuthorCollection;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API routes
Route::apiResource('/petitions', PetitionController::class);

Route::apiResource('/authors', AuthorController::class)->only(['index', 'show']);

// For limiting resources Use below
//Route::resource('/petitions', PetitionController::class)->only(['index', 'store']);
