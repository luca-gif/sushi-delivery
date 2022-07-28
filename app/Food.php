<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Food extends Model
{

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    protected $fillable = [
        'image',
        'name',
        'slug',
        'description',
        'relation',
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