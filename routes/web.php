<?php

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

Route::get('/', function () {
    return view('welcome');
});

//route for cars
Route::get('/cars', function()
{
    return view('cars.index');
})->name('cars.index');

Route::get('/cars/add', function()
{
    return view('cars.add');
})->name('cars.add');

//returns all Cars
Route::get('/cars/all', function()
{
    $cars =  App\Models\Cars::all();
    return view('cars.show', compact('cars'));
})->name('cars.show');