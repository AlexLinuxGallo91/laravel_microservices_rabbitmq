<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert(
            [
                'user_id' => 1,
                'product_name' => 'Playstation 5',
                'quantity' => 1,
                'total_price' => 499.99
            ]
        );

        DB::table('orders')->insert(
            [
                'user_id' => 2,
                'product_name' => 'Xbox Series X',
                'quantity' => 2,
                'total_price' => 399.99
            ]
        );
    }
}
