<?php

namespace App\View\Components;
use App\Models\Ad;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Selling extends Component
{
    /**
     * The alert type.
     *
     * @var string
     */

    public function __construct()
    {

    }

    public function render()
    {
        return view('components.selling', [
            'ads' => Ad::all(),
            'seller_ads' => Auth::user()->ads()->get()
        ]);
    }
}
