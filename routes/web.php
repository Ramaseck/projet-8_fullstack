<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/delete-etudiant/{id}",[PostController::class,'destroy']);
Route::get("/update-etudiant/{id}",[PostController::class,'update']);
Route::post("/update/traitement", [PostController::class,'update_traitement']);
Route::get("/etudiant",[PostController::class, 'index']);
Route::get("/ajout",[PostController::class,'create']);
Route::post("/ajout/traitement", [PostController::class,'store']);




















































































































































