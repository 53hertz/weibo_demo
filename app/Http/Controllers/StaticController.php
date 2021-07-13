<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaticController extends Controller
{
    public function home()
    {
        $items = [];
        if (Auth::check()) {
            $items = Auth::user()->getStatuses('desc', 5);
        }
        return view('static_pages/home', compact('items'));
    }

    public function help()
    {
        return 'help';
    }

    public function about()
    {
        return 'about';
    }
}
