<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Food extends Model
{
    protected $fillable = [
        'image',
        'name',
        'slug',
        'description',
        'price'
    ];


    public static function slugGenerator($titolo)
    {
        $slug = Str::slug($titolo, '-');
        $standard_slug = $slug;
        $get_slug = Food::where('slug', $slug)->first();
        $i = 0;

        while ($get_slug) {
            $slug = $standard_slug . '-' . $i;
            $i++;
            $get_slug = Food::where('slug', $slug)->first();
        }

        return $slug;
    }
}