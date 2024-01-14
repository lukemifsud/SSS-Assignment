<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;
use App\Models\Manufacturers;

class CarController extends Controller
{
    public function index()
    {
       // $cars = Cars::all();
        if (request('manufacturers_id') == null)
        {
            $cars = Cars::all();
        }
        else
        {
            $cars = Cars::where('manufacturers_id', request('manufacturers_id'))->get();
        }
        $manufacturers = Manufacturers::orderby('name')->pluck('name','id')->prepend('All Manufacturers', '');

        return view('cars.index', compact('cars', 'manufacturers'));
    }

    public function add()
    {
        $cars = new Cars();
        $manufacturers = Manufacturers::orderby('name')->pluck('name','id')->prepend('All Manufacturers', '');
        return view('cars.add', compact('manufacturers', 'cars'));
    }

    public function show($id)
    {
        $cars =  Cars::find($id);
        return view('cars.show', compact('cars'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'salesperson_email' => 'required|email',
            'manufacturers_id' => 'required|exists:manufacturers,id'
        ]);

        Cars::create($request->all());
        return redirect()->route('cars.index')->with('message', 'Car has been added successfully');
    }

    public function edit($id)
    {
        $cars = Cars::find($id);
        $manufacturers = Manufacturers::orderby('name')->pluck('name','id')->prepend('All Manufacturers', '');
        return view('cars.edit', compact('manufacturers', 'cars'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'salesperson_email' => 'required|email',
            'manufacturers_id' => 'required|exists:manufacturers,id'
        ]);

        $cars = Cars::find($id);
        $cars->update($request->all());
        return redirect()->route('cars.index')->with('message', 'Car has been updated successfully');

    }

    public function destroy($id)
    {
        $cars = Cars::find($id);
        $cars->delete();
        return back()->with('message', 'Car has been deleted successfully');
    }
}

