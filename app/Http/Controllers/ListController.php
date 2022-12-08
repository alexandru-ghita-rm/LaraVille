<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ListController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index() {
        return view('components.add-listing', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
//dd($request);
        $validated = $request->validate([
            'title' => ['required', 'max:255'],
            'price' => ['required', 'max:255'],
            'description' => ['required', 'min:5', 'max:255'],
        ]);

        Ad::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'slug' => $request->title,
            'price' => $request->price,
            'summary' => $request->summary,
            'category_id' => $request->category_id,
            'body' => $request->description,
        ]);
        return redirect()->route('my-account');
    }
}
