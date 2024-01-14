<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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

Route::get('/', function () {
    return view('welcome');
});

//route for cars
Route::get('/cars', [CarController::class, 'index'])->name('cars.index');

   
   
Route::get('/cars/add', [CarController::class, 'add'])->name('cars.add');

 

//show all Cars by id
Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');

//create new car
Route::post('/cars', [CarController::class, 'store'])->name('cars.store');
