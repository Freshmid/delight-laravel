<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get("/tes", function () {
    return response()->json(true);
});
Route::post("/login", [AuthController::class, "login"]);
Route::post("/register", [AuthController::class, "register"]);

// ?id=id_user
Route::get("/user", [AuthController::class, "user"]);

Route::get("/rekomendasi", [ApiController::class, "rekomendasi"]);
Route::get("/inspirasi", [ApiController::class, "inspirasi"]);
Route::get("/home-api", [ApiController::class, "homeApi"]);

// ?cari=nama|deskripsi&kategori=kategori&order=asc|desc
Route::get("/resep", [ApiController::class, "resep"]);

Route::get("/detail-resep", [ApiController::class, "detailResep"]);
