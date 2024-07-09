<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    //
    public function index()
    {
        return view('cars.index', [
            'cars' => Car::all()
        ]);
    }

    public function show($id)
    {
        return view('cars.show', [
            'car' => Car::find($id)
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'type' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric|min:0',
        ]);

        $car = new Car();
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->price = $request->price;
        $car->type = $request->type;
        $car->image = $request->image->store('images', 'public');
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $formFields['photo'] = $request->image->move(public_path('storage/photos'), $request->image->getClientOriginalName());
            $imgName = basename($request->image);
            $linkToImg = asset('/storage/photos/' . $imgName);
            $car->image = $linkToImg;
        }
        $car->save();

        return redirect('/cars')->with('success', 'Car has been added successfully!');
    }

    public function update(Request $request, Car $car){
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'type' => 'required',
            'price' => 'required|numeric|min:0',
        ]);

        $car = Car::find($request->id);
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->price = $request->price;
        $car->type = $request->type;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $formFields['photo'] = $request->image->move(public_path('storage/photos'), $request->image->getClientOriginalName());
            $imgName = basename($request->image);
            $linkToImg = asset('/storage/photos/' . $imgName);
            $car->image = $linkToImg;
        }
        $car->save();

        return redirect('/cars')->with('success', 'Car has been updated successfully!');
    }

    public function destroy(Car $car){
        if (auth('admin')->user()->hasRole('admin')) {
            $car->delete();
        }
        else {
            return (403);
        }
        // $car->delete();
        return redirect('/cars')->with('success', 'Car has been deleted successfully!');
    }
}
