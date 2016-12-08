<?php

namespace App\Http\Controllers\Cars;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Car;
use Illuminate\Support\Facades\Input;

class CarsController extends Controller {

    public function listCars() {
        return view('welcome')
                        ->with('cars', Car::all());
    }

    public function addCar() {
        return view('addcar');
    }
    
    public function newCar(Request $request){
        
        
        $car = new Car;
        $car->car_brand = Input::get("car_brand");
        $car->car_model = Input::get("car_model");
        $car->mileage = Input::get("mileage");
        $car->power = Input::get("power");
        $car->capacity = Input::get("capacity");
        $car->fuel = Input::get("fuel");
        $car->price = Input::get("price");
        $car->production_year = Input::get("production_year");
        $car->save();
    }

}
