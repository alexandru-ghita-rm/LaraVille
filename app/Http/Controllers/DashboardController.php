<?php

namespace App\Http\Controllers;

use App\Models\Category;

class DashboardController extends Controller
{
    public function index() {
        return view('auth.dashboard', [
            'categories' => Category::all()
        ]);
    }
}
