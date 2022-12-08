<?php


namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct() {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.register', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'max:255'],
            'telephone' => ['required', 'max:255'],
            'email' => ['required' , 'email', 'max:255'],
            'password' => ['required' , 'confirmed'],
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('my-account');
    }


}

