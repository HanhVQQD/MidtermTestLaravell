<?php

namespace Database\Seeders;

use App\Models\ProductModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limit = 5;
        $fake = Faker::create();
        $type=["Rice","Bread","Pho". "Soup", "FoodItalia"];
        
        for ($i = 0; $i < $limit; $i++) {
            DB::table('categories')->insert([
                'name' => $fake->randomElement($type),
            ]);
        }
    }
}
