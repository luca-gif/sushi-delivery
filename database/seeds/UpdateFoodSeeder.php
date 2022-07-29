<?php

use Illuminate\Database\Seeder;

use App\Food;

class UpdateFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // prendo tutte i cibi
        $foods = Food::all();

        // li ciclo e li associo
        foreach ($foods as $food) {
            $food->category_id = $food->relation;

            if (!empty($food->relation_type)) {
                $food->type_id = $food->relation_type;
            }

            $food->update();
        }
    }
}