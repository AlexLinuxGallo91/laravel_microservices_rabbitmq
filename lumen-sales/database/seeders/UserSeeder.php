<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Alexis Araujo',
                'email' => 'alexis.araujo@triara.com',
                'password' => 'secret'
            ]
        );

        DB::table('users')->insert(
            [
                'name' => 'Patsy Morales',
                'email' => 'patsy.morales@triara.com',
                'password' => 'secret'
            ]
        );
    }
}
