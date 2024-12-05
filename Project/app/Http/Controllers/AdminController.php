<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mark;

class AdminController extends Controller
{
    public function index() {
        $newUsersCount = \App\Models\User::where('created_at', '>=', now()->subMonth())->count();

        return view('admin', [
            'marks' => Mark::all(),
            'newUsersCount' => $newUsersCount,
            'newUsersData' => \App\Models\User::where('created_at', '>=', now()->subMonth())
                ->selectRaw('DATE(created_at) as date, count(*) as count')
                ->groupBy('date')
                ->orderBy('date')
                ->get(),
        ]);
    }

}
