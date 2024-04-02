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
*

Route::get('/', function () {
    return view('list');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/', function () {
    return view('list');
}); */
  
Route::get("/", [ClienteController::class, 'show'])->name("list");
  
Route::get("/create", [ClienteController::class, 'create'])->name("create");
  

//Route::resource('cliente', ClienteController::class);
