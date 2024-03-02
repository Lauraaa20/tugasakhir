<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\tables\TutorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post(
    '/login',
    [LoginBasic::class, "login"]
);
Route::get("/logout", [LoginBasic::class, "logout"]);

Route::post("/tutor/create", [TutorController::class, "insert"])->name("tutor.insert");
Route::post("/tutor/update/{tutorId}", [TutorController::class, "update"])->name("tutor.update");
Route::delete("/tutor/delete/{tutorId}", [TutorController::class, "destroy"])->name("tutor.delete");