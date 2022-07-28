<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Type;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Nigiri', 'Temaki', 'Hosomaki', 'Uramaki', 'Uramaki Special', 'Sashimi', 'Chirashi', 'Futomaki'
        ];

        foreach ($types as $type) {

            $new_type = new Type;
            $new_type->name = $type;
            $new_type->slug = Str::slug($new_type->name, '-');
            $new_type->save();
        }
    }
}