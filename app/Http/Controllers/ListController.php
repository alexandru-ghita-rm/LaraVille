<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index() {
        return view('add-listing', [
        ]);
    }
}
