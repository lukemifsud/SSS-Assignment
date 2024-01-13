<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarController extends Controller
{
    public function index()
    {
        return view('cars.index');
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
