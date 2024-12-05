<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Mark, Order};

class AdminController extends Controller
{
    public function index() {
        $newUsersCount = \App\Models\User::where('created_at', '>=', now()->subMonth())->count();
    
        $newUsersData = \App\Models\User::where('created_at', '>=', now()->subMonth())
            ->selectRaw('DATE(created_at) as date, count(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();
    
        $ordersCount = \App\Models\Order::where('created_at', '>=', now()->subMonth())->count();
    
        $ordersData = \App\Models\Order::where('created_at', '>=', now()->subMonth())
            ->selectRaw('DATE(created_at) as date, count(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();
    
        return view('admin', [
            'marks' => Mark::all(),
            'newUsersCount' => $newUsersCount,
            'newUsersData' => $newUsersData,
            'ordersCount' => $ordersCount,
            'ordersData' => $ordersData,
            'orders' => Order::with(['user', 'car'])->where('status', 'not delivered')->get()
        ]);
    }

}
