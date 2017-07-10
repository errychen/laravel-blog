<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;

class MenuController extends Controller
{
    public function index()
    {

        return view('menu.index');
    }

    public function run() {
        echo 'Run';
    }

    public function lists() {

        $func = $this->getCloure();

        $func_2 = $func(10, 20);

//        var_dump($func_2);

        echo $func_2(30);

        return view('menu.lists');
    }


    private function getCloure() {
        return function ($a, $b) {
            return function ($c) use($a, $b) {
                return $c + $a + $b;
            };

        };
    }

}
