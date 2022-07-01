<?php

namespace Database\Seeders;

use App\Models\ProductModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limit = 10;
        $faker = Faker::create();
        for ($i = 0; $i < $limit; $i++) {
            DB::table('Products') -> insert([
                'name' => $faker -> name,
                'image' => $faker -> imageUrl(),
                'price' => $faker -> numberBetween($min = 20, $max = 60),
                'promotionPrice' => $faker->numberBetween($min = 30, $max = 90),
                'description' => $faker -> sentence,
                'quantity' => $faker -> randomDigit,
                'id_type'=> $faker -> numberBetween($min = 1, $max = 3),
            ]);
        }
    }
}
