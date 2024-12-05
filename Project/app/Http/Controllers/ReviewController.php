<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index() {
        $reviews = Review::with('user', 'order')
                         ->orderBy('created_at', 'desc')
                         ->get();
    
        return view('reviews', compact('reviews'));
    }

    public function upload(Request $request) {
        $validatedData = $request->validate([
            'point' => 'required|in:1,2,3,4,5',
            'comment' => 'required|string|max:255',
            'order_id' => 'required|exists:orders,id',
        ]);
    
        $review = new Review();
        $review->user_id = Auth::id(); 
        $review->order_id = $validatedData['order_id'];
        $review->comment = $validatedData['comment'];
        $review->point = $validatedData['point'];
    
        $review->save();
    
        return redirect()->back();
    }
}
