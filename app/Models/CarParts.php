<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;


class CarParts extends Eloquent
{
    public $table = 'cars_parts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users__id', 
        'junkyards__id',
        'name',
        'car_brand',
        'car_model',
        'price',
        'production_year',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
}
