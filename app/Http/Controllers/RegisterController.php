<?php


namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController
{
    public function index()
    {
        return view('auth.register', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:25',
            'username' => 'required|max:25',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // sign the user in

        return redirect()->route('home');
    }
}

