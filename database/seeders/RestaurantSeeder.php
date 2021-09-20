<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon; 

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            [
                'user_id' => 1,
                'name' => 'La vaca loca',
                'description' => 'Comida de vaca bien rica',
                'city' => 'Manizales',
                'phone' => '123',
                'category_id' => 1,
                'delivery' => 'y',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => 1,
                'name' => 'La hamburguesa loca',
                'description' => 'Hamburguesas buenas',
                'city' => 'Pereira',
                'phone' => '456',
                'category_id' => 2,
                'delivery' => 'n',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => 1,
                'name' => 'Pizzaton',
                'description' => 'Pues pizza',
                'city' => 'Armenia',
                'phone' => '890',
                'category_id' => 3,
                'delivery' => 'y',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
