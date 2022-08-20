<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function foods()
    {
        return $this->belongsToMany('App/Food');
    }

    protected $fillable = [
        'food_name',
        'amount',
        'date',
        'hour',
        'customer_name',
        'customer_email',
        'customer_phone'
    ];
}