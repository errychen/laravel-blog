<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Hprose\Future;
use \Hprose\Http\Client;

class HomeController extends Controller
{

    public function test() {

        return view('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


//        App::bind('main.controller', function ($app) {
//            return $app->make(MainController::class);
//        });

//        $orders = Order::all();

//        foreach ($orders as $order) {
//            echo $order->uorder_id;
//        }


//        $list = Order::where('uid', 1000032)
//            ->orderBy('addtime', 'desc')
//            ->take(10)
//            ->get();
//        echo '<pre>';
//        print_r($list);


//        echo App::basePath();
//
//        Order::run();

//        App::make(MainController::class)->run();

//        App::bind('main.controller', function ($app) {
//            return $app->make(MainController::class);
//        });
//
//        app('main.controller')->run();


//        $users = DB::select('select * from user where uid = ?', [1000003]);

        return view('home');
    }

    public function hprose() {
        $p = Future\promise(function($resolve, $reject) {
            $a = 1;
            $b = 2;
            if ($a != $b) {
                $resolve('OK');
            } else {
                $reject(new Exception("$a == $b"));
            }
        });

        $p->then(function($value) {
            echo $value;
        }, function($error) {
            echo $error;
        });

//        Future\co(function() {
//            $test = new Client("http://hprose.com/example/");
//            var_dump((yield $test->hello("hprose")));
//            $a = $test->sum(1, 2, 3);
//            $b = $test->sum(4, 5, 6);
//            $c = $test->sum(7, 8, 9);
//            var_dump((yield $test->sum($a, $b, $c)));
//            var_dump((yield $test->hello("world")));
//        });

        $test = new Client("http://hprose.com/example/");

        Future\co(function() use ($test) {
            for ($i = 0; $i < 5; $i++) {
                var_dump((yield $test->hello("1-" . $i)));
            }
        });

        Future\co(function() use ($test) {
            for ($i = 0; $i < 5; $i++) {
                var_dump((yield $test->hello("2-" . $i)));
            }
        });
    }

    public function getClosure()
    {
        return function ($name) {

            return $name;
        };
    }

}
