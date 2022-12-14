<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FoodTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(TypeTableSeeder::class);
        $this->call(UpdateFoodSeeder::class);
    }
}