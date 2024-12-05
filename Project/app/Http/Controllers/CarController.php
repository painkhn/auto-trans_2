<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Mark, Carm, Order, Car};
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index($model = null) {
        if ($model == null) {
            $orderedCarIds = Order::pluck('car_id')->toArray();
            
            $cars = Car::whereNotIn('id', $orderedCarIds)->get();
        } else {
            $model = Mark::where('name', $model)->firstOrFail();
            
            $orderedCarIds = Order::whereIn('car_id', function($query) use ($model) {
                $query->select('id')
                      ->from('cars')
                      ->where('mark_id', $model->id);
            })->pluck('car_id')->toArray();
            
            $cars = Car::where('mark_id', $model->id)
                        ->whereNotIn('id', $orderedCarIds)
                        ->get();
        }
    
        return view('cars', [
            'marks' => Mark::all(),
            'cars' => $cars,
        ]);
    }

    public function upload(Request $request) {
        $validated = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'mark' => 'required|exists:marks,id',
            'mileage' => 'required|integer|min:0',
            'year' => 'required|integer|between:1900,2024',
            'engine' => 'required|in:gasoline,diesel,electro',
            'volume' => 'required|numeric|min:0',
            'power' => 'required|integer|min:0',
        ]);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('cars', 'public');
        }

        $car = new Car();
        $car->name = $validated['name'];
        $car->price = $validated['price'] ?? 0;
        $car->mileage = $validated['mileage'];
        $car->year = $validated['year'];
        $car->engine = $validated['engine'];
        $car->volume = $validated['volume'];
        $car->power = $validated['power'];
        $car->mark_id = $validated['mark'];
        $car->photo = $photoPath;
        $car->save();

        return redirect()->route('cars.index');
    }

    public function show($id) {
        $car = Car::findOrFail($id);
        $user = auth()->user();

        $user->load('cars');

        return view('car', [
            'car' => $car,
            'isFavourite' => $user->cars->contains($car->id)
        ]);
    }

}
