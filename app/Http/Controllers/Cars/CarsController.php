<?php

namespace App\Http\Controllers\Cars;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use App\Models\Car;


class CarsController extends Controller
{
      public function listCars()
        {
          return view('welcome')
                  ->with('cars', Car::all());
        }
}
