<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;


class Car extends Eloquent
{
    public $table = 'cars';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users__id', 
        'junkyards__id',
        'car_brand',
        'car_model',
        'price',
        'production_year',
        'mileage',
        'fuel',
        'power',
        'capacity'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
}
