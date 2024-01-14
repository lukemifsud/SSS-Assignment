<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;
use App\Models\Manufacturers;

class CarController extends Controller
{
    public function index()
    {
        $cars = Cars::all();
        $manufacturers = Manufacturers::orderby('name')->pluck('name','id');

        return view('cars.index', compact('cars', 'manufacturers'));
    }

    public function add()
    {
        return view('cars.add');
    }

    public function show()
    {
        $cars =  Cars::all();
        return view('cars.show', compact('cars'));
    }
}
