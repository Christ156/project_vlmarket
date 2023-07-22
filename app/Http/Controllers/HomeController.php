<?php

namespace App\Http\Controllers;

use App\Models\Market;


class HomeController extends Controller
{

    public function index()
    {
        $product = Market::latest()->paginate(4);
        return view('home', compact('product'));
    }
}
