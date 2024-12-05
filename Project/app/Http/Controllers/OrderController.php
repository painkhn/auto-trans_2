<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Order, Favourite};
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function upload(Request $request) {
        $request->validate([
            'car_id' => 'required',
            'phone' => 'required|string|max:18'
        ]);

        Favourite::where('car_id', $request->car_id)->where('user_id', Auth::id())->delete();
        Order::create([
            'car_id' => $request->car_id,
            'user_id' => Auth::id(),
            'phone' => $request->phone,
            'status' => 'not delivered'
        ]);

        return redirect(route('profile.index'));
    }

    public function update($orderId) {
        $order = Order::findOrFail($orderId);

        $order->update([
            'status' => 'delivered'
        ]);

        return redirect()->back();
    }
}
