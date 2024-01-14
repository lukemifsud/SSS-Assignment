<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarController extends Controller
{
    public function index()
    {
        $cars = Cars::all();
        return view('cars.index', compact('cars'));
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
