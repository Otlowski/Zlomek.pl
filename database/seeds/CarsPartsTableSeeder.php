<?php

use Illuminate\Database\Seeder;
use App\Models\CarParts;

class CarsPartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('cars_parts')->truncate();
        
        /*Arrays to shuffle declared*/
        $usersId     = [1,2,3,4];
        $junkyardsId = [1,2,3,4];
        $production  = ['1991','1995','1996','1999'];
        $model       = ['Polo','Golf II','Golf III','Golf IV','Passat','Jeta','Vento'];
        $price       = ['100','200','50','125','500','225','300'];
        $name        =  [ 'wheel',
                          'battery',
                          'shock-absorber',
                          'steering wheel',
                          'hand-brake',
                          'gearbox',
                          'lights'];
        
        /*Seed 20 random cars parts */
        for($i=0; $i<20 ;$i++){
            
        $parameters = [
            'users__id'       => $usersId[array_rand($usersId,1)],
            'junkyards__id'   => $junkyardsId[array_rand($junkyardsId,1)],
            'name'            => $name[array_rand($name,1)],
            'car_brand'       => 'Volksvagen',
            'car_model'       => $model[array_rand($model,1)],
            'price'           => $price[array_rand($price,1)],
            'production_year' => $production[array_rand($production,1)],
                ];
        
        $car = new CarParts($parameters);
        $car->save();
        }
    }
}
