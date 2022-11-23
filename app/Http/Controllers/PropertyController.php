<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function show(Ad $ad) {
        return view('ad', [
            'ad' => $ad,
            'categories' => Category::all()
        ]);
    }
}
