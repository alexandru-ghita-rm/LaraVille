<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use App\Models\Image;
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
        $validated = $request->validate([
            'title' => ['required', 'max:255'],
            'slug' => ['required|string|max:255'],
            'price' => ['required', 'max:255'],
            'description' => ['required', 'min:5', 'max:255'],
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $image_path = $request->file('image')->store('image', 'public');

        $data = Image::store([
            'image' => $image_path,
        ]);

        session()->flash('success', 'Image Upload successfully');

        Ad::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'slug' => str()->slug($request->title),
            'price' => $request->price,
            'summary' => $request->summary,
            'category_id' => $request->category_id,
            'body' => $request->description,
            'image' => $request->image->storeAs('images', $imageName),
        ]);
        return redirect()->route('my-account');
    }
}
