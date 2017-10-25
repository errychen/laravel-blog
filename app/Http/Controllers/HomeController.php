<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Hprose\Future;
use \Hprose\Http\Client;
use Illuminate\Support\Str;

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
//        echo encrypt(1);
//
//        echo '<br/>';

        echo decrypt('eyJpdiI6IjRLS0EyRHJaR0UzcWlnbjc4UllTeUE9PSIsInZhbHVlIjoiSGtGaHFuaEQrd0xtWGdhSWRmXC9Idmc9PSIsIm1hYyI6ImY3YjE1ZmI2Yzk1N2I3MmFhNzI0ZDhlMmRjYWFlMjkzZDc4NjY2YTM0Y2M5MTNiNzg1NzgwM2M5ZWVkOThkYjUifQ==');
//        var_dump( md5(random_bytes(32) ) );
//
//        echo '<br/>';
//
//        var_dump( substr(str_replace(['/', '+', '='], '', base64_encode(random_bytes(64))), 0, 32) );
//
//        var_dump( random_int(100, 999) );
//
        die;


        for($i = 0; $i < 100; ++$i) {
            echo md5( random_bytes(16) );
            echo '<br/>';
        }

        die;

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
