<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('main.index', ['products'=>$products]);
    }

    public function run() {
        echo 'Run';
    }

}
