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
    return "<h1>All Cars</h1>";
});

Route::get('/cars/create', function()
{
    return "<h1>Add new car</h1>";
});

//returns all Cars
Route::get('/cars/all', function()
{
    return App\Models\Cars::all();
});