<?php

use App\Http\Controllers\ClienteController;
use App\Models\Cliente;
use Illuminate\Support\Facades\Route;

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
  
Route::get("/", [ClienteController::class, 'index']);

Route::post("/search", [ClienteController::class, 'search'])->name("search");

Route::get("/create", [ClienteController::class, 'create'])->name("create");

Route::get("/edit/{id}", [ClienteController::class, 'edit'])->name("edit");

Route::post("/edit/{id}", [ClienteController::class, 'update'])->name("update");

Route::post("/store", [ClienteController::class, 'store']);

Route::delete("/delete/{id}", [ClienteController::class, 'destroy']);
