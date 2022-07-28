<?php

use Illuminate\Database\Seeder;
use App\Food;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $foods = config('food');

        foreach ($foods as $food) {
            $new_food = new Food();

            $new_food->name = $food['name'];
            $new_food->image = $food['image'];
            $new_food->slug = Food::slugGenerator($new_food->name);
            $new_food->description = $food['description'];
            $new_food->price = $food['price'];
            $new_food->relation = $food['relation'];

            $new_food->save();
        }
    }
}