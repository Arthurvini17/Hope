<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [HomeController::class,"index"])->name("home.index");
Route::get("/login", [LoginController::class,"index"])->name("login.index");
Route::post("/login", [LoginController::class,"auth"])->name("login.auth");

Route::get("/register", [RegisterController::class, "index"])->name("register.index");
Route::post("/register", [RegisterController::class,"store"])->name("register.store");


