<?php
//
//namespace App\Http\Controllers;
//
//use App\Models\Image;
//use Illuminate\Http\Request;
//
//class ImageController extends Controller
//
//{
//    public function index()
//    {
//        return view('components.image');
//    }
//
//    public function store(Request $request)
//    {
//        $this->validate($request, [
//            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
//        ]);
//
//        $request->file('image')->store('image', 'public');
//
//        session()->flash('success', 'Image Upload successfully');
//    }
//}
