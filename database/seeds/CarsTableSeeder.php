<?php

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cars')->truncate();
        
        /*Arrays to shuffle declared*/
        $usersId = [1,2,3,4];
        $junkyardsId = [1,2,3,4];
        $production = ['1991','1995','1996','1999'];
        $model = ['Polo','Golf II','Golf III','Golf IV','Passat','Jeta','Vento'];
        $price = ['450','600','900','1200','1500','2250','3000'];
        $mileage = ['120000','150000','220000','320000']; 
        $power = [60,80,90,110];
        $capacity = ['1000','1200','1600','1700'];
        $fuel = ['petrol','diesel','gas'];
        
        /*Seed 20 random cars */
        for($i=0; $i<20 ;$i++){
            
        $parameters = [
            'users__id'       => $usersId[array_rand($usersId,1)],
            'junkyards__id'  => $junkyardsId[array_rand($junkyardsId,1)],
            'car_brand'       => 'Volksvagen',
            'car_model'       => $model[array_rand($model,1)],
            'price'           => $price[array_rand($price,1)],
            'production_year' => $production[array_rand($production,1)],
            'mileage'         => $mileage[array_rand($mileage,1)],
            'fuel'            => $fuel[array_rand($fuel,1)],
            'power'           => $power[array_rand($power,1)],
            'capacity'        => $capacity[array_rand($capacity,1)]

                ];
        
        $car = new Car($parameters);
        $car->save();
        }
    }
}
