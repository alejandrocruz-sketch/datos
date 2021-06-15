<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/Datos/2017', [PagesController::class, 'datos_2017']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/Datos/2017', [PagesController::class, 'datos_2017'])->name('datos.2017');
Route::middleware(['auth:sanctum', 'verified'])->get('/Datos/2018', [PagesController::class, 'datos_2018'])->name('datos.2018');
Route::middleware(['auth:sanctum', 'verified'])->get('/Datos/2019', [PagesController::class, 'datos_2019'])->name('datos.2019');
Route::middleware(['auth:sanctum', 'verified'])->get('/Datos/2020', [PagesController::class, 'datos_2020'])->name('datos.2020');
Route::middleware(['auth:sanctum', 'verified'])->get('/Datos/2021', [PagesController::class, 'datos_2021'])->name('datos.2021');

