<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedInteger('cs_id');
            $table->unsignedInteger('shop_id');
            $table->unsignedInteger('uid');
            $table->unsignedInteger('store_id');
            $table->decimal('amount', 10, 2);
            $table->decimal('transport_fee', 10, 2);
            $table->decimal('pick_amount', 10, 2);
            $table->decimal('should_amount', 10, 2);
            $table->decimal('paid_amount', 10, 2);
            $table->decimal('third_amount', 10, 2);
            $table->unsignedInteger('create_time');
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
