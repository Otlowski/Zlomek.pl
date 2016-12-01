<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;


class Junkyards extends Eloquent
{
    public $table = 'junkyards';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'location',
        'phone_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
}
