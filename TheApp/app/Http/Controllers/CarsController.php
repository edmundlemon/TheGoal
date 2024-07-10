<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    //
    public function index()
    {
        return view('menu', [
            'cars' => Car::all(),
            'types' => Car::all()->pluck('type')->unique()
        ]);
    }

    public function adminView()
    {
        // if (auth('admin')->user()) {
            return view('view-all-cars', [
                'cars' => Car::all()
            ]);
        // } else {
        //     return (403);
        // }
    }

    public function show_car($id)
    {
        return view('car', [
            'car' => Car::find($id)
        ]);
    }


    public function create()
    {
        return view('addcar');
    }

    public function store(Request $request)
    {
        // if (!auth('admin')->user()) {
        //     return (403);
        // }
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
        // $car->image = $request->image->store('images', 'public');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::random(10) . '.' . $image->getClientOriginalExtension();
            $path = 'images/carimage/';
            $image->move(public_path($path), $imageName);
            $car->image = asset($path . $imageName);
        }
        $car->save();

        return redirect('/index')->with('success', 'Car has been added successfully!');
    }

    public function edit(Car $car)
    {
        return view('editcar', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'type' => 'required',
            'price' => 'required|numeric|min:0',
        ]);
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->price = $request->price;
        $car->type = $request->type;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::random(10) . '.' . $image->getClientOriginalExtension();
            $path = 'images/carimage/';
            $image->move(public_path($path), $imageName);
            $car->image = asset($path . $imageName);
        }
        $car->save();

        return redirect('/view-all-cars')->with('success', 'Car has been updated successfully!');
    }

    public function destroy(Car $car)
    {
        if (auth('admin')->user()) {
            $car->delete();
        } else {
            return redirect('forbidden');
        }
        // $car->delete();
        return redirect('/view-all-cars')->with('success', 'Car has been deleted successfully!');
    }
}
