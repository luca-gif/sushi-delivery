<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Category;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Delivery Box', 'Antipasti Freddi', 'Antipasti Caldi', 'Sushi', 'Primi Caldi', 'Secondi Caldi', 'Teppan Yaki (Grigliata)', 'Bevande'
        ];

        foreach ($categories as $category) {

            $new_category = new Category();
            $new_category->name = $category;
            $new_category->slug = Str::slug($new_category->name, '-');

            $new_category->save();
        }
    }
}