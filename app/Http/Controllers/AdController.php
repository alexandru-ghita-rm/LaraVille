<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function index() {
        $ads = Ad::latest();

        if (request('search')) {
            $ads
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        };

        return view('ads', [
            'ads' => $ads->get(),
            'categories' => Category::all()
        ]);
    }
}
