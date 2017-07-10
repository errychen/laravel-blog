<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

//    protected $table = 'order_uorder';

    /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;


    public static function run() {
        app('main.controller')->run();
    }

}
