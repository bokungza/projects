<?php

use Illuminate\Database\Seeder;
use App\Orders;
use App\Ordertails;
use App\Users;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Orders::class, 5)->create();
        
    }
}
