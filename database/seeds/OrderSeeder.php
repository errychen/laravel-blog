<?php
use Illuminate\Database\Seeder;

use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('orders')->delete();

        Order::create([
            'id' => '1081705173602867',
            'cs_id' => 0,
            'shop_id' => 1000021,
            'uid' => 1000021,
            'amount' => 169.65

        ]);
    }
}
