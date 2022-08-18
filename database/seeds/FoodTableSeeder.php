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

            if (!empty($food['description'])) {
                $new_food->description = $food['description'];
            }

            $new_food->price = $food['price'];
            $new_food->relation = $food['relation_category'];
            $new_food->amount = $food['amount'];

            if (!empty($food['relation_type'])) {
                $new_food->relation_type = $food['relation_type'];
            }

            $new_food->save();
        }
    }
}