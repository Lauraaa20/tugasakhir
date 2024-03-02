<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\tables\ClassificationController;
use App\Http\Controllers\tables\JadwalController;
use App\Http\Controllers\tables\KartuKendaliController;
use App\Http\Controllers\tables\NilaiController;
use App\Http\Controllers\tables\PlacementController;
use App\Http\Controllers\tables\QuizController;
use App\Http\Controllers\tables\SertifikatController;
use App\Http\Controllers\tables\StudentController;
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

// tutor
Route::post("/tutor/create", [TutorController::class, "insert"])->name("tutor.insert");
Route::post("/tutor/update/{tutorId}", [TutorController::class, "update"])->name("tutor.update");
Route::delete("/tutor/delete/{tutorId}", [TutorController::class, "destroy"])->name("tutor.delete");

// student
Route::post("/student/create", [StudentController::class, "insert"])->name("student.insert");
Route::post("/student/update/{studentId}", [StudentController::class, "update"])->name("student.update");
Route::delete("/student/delete/{studentId}", [StudentController::class, "destroy"])->name("student.delete");

//sertifikat
Route::post("/sertifikat/create", [SertifikatController::class, "insert"])->name("sertifikat.insert");
Route::post("/sertifikat/update/{sertifikatId}", [SertifikatController::class, "update"])->name("sertifikat.update");
Route::delete("/sertifikat/delete/{sertifikatId}", [SertifikatController::class, "destroy"])->name("sertifikat.delete");

//quiz
Route::post("/quiz/create", [QuizController::class, "insert"])->name("quiz.insert");
Route::post("/quiz/update/{quizId}", [QuizController::class, "update"])->name("quiz.update");
Route::delete("/quiz/delete/{quizId}", [QuizController::class, "destroy"])->name("quiz.delete");

//placement
Route::post("/placement/create", [PlacementController::class, "insert"])->name("placement.insert");
Route::post("/placement/update/{placementId}", [PlacementController::class, "update"])->name("placement.update");
Route::delete("/placement/delete/{placementId}", [PlacementController::class, "destroy"])->name("placement.delete");

//nilai
Route::post("/nilai/create", [NilaiController::class, "insert"])->name("nilai.insert");
Route::post("/nilai/update/{nilaiId}", [NilaiController::class, "update"])->name("nilai.update");
Route::delete("/nilai/delete/{nilaiId}", [NilaiController::class, "destroy"])->name("nilai.delete");

//kartu kendali
Route::post("/kartukendali/create", [KartuKendaliController::class, "insert"])->name("kartukendali.insert");
Route::post("/kartukendali/update/{kartukendaliId}", [KartuKendaliController::class, "update"])->name("kartukendali.update");
Route::delete("/kartukendali/delete/{kartukendaliId}", [KartuKendaliController::class, "destroy"])->name("kartukendali.delete");

//jadwal
Route::post("/jadwal/create", [JadwalController::class, "insert"])->name("jadwal.insert");
Route::post("/jadwal/update/{jadwalId}", [JadwalController::class, "update"])->name("jadwal.update");
Route::delete("/jadwal/delete/{jadwalId}", [JadwalController::class, "destroy"])->name("jadwal.delete");

//classification
Route::post("/classification/create", [ClassificationController::class, "insert"])->name("classification.insert");
Route::post("/classification/update/{classificationId}", [ClassificationController::class, "update"])->name("classification.update");
Route::delete("/classification/delete/{classificationId}", [ClassificationController::class, "destroy"])->name("classification.delete");
