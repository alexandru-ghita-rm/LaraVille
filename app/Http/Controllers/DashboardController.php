<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\View\Components\Selling;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller

{
    public function __construct() {
    $this->middleware(['auth']);
    }

    public function index() {
        return view('auth.dashboard');
    }
}
