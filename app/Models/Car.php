<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Models\Junkyards;

class Car extends Eloquent {

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
    public function junkyard() {
        return $this->belongsTo('App\Models\Junkyards', 'junkyards__id');
    }

}
