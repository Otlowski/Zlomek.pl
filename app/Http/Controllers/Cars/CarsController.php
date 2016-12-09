<?php

namespace App\Http\Controllers\Cars;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Support\Facades\Input;
use Image;

class CarsController extends Controller {

    public function listCars() {
        return view('welcome')
                        ->with('cars', Car::all());
    }

    public function addCar() {
        return view('addcar');
    }

//    public function addImage(Request $request){
//        if($request ->hasFile('carPhoto'))
//            {
//                $carPhoto = $request->file('carPhoto');
//                $filename = time().'.'.$carPhoto->getClientOriginalExtension();
//                Image::make($carPhoto)->resize(300,300)->save(public_path('/img/cars/'.$filenamem));
//                
//                $car = 
//        
//    }

    public function newCar(Request $request) {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save(public_path('/img/cars/'.$filename));

            $car = $car = new Car;
            $car->image = $filename;
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
}
    