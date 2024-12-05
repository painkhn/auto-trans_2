<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $favourites = $user->cars;

        return view('favorites', compact('favourites'));
    }

    public function addToFavourites($carId)
    {
        $user = Auth::user();
        $car = Car::findOrFail($carId);

        if (!$user->cars->contains($car)) {
            $user->cars()->attach($car);
        }

        return redirect()->back();
    }

    public function removeFromFavourites($carId)
    {
        $user = Auth::user();
        $car = Car::findOrFail($carId);

        if ($user->cars->contains($car)) {
            $user->cars()->detach($car);
        }

        return redirect()->back();
    }
}
