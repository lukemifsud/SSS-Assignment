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

   
//route for create
Route::get('/cars/add', [CarController::class, 'add'])->name('cars.add');

 //create new car
Route::post('/cars', [CarController::class, 'store'])->name('cars.store');

//show all Cars by id
Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');


//display the edit contact form
Route::get('/cars/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');

//update the car details (PUT request)
Route::put('/cars/{id}', [CarController::class, 'update'])->name('cars.update');
