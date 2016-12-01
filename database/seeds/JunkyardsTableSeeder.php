<?php

use Illuminate\Database\Seeder;
use App\Models\Junkyards;

class JunkyardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('junkyards')->truncate();


        $faker = Faker\Factory::create();
        
        /*Seed 20 random junkyards */
        for($i=0; $i<20 ;$i++){
            
        $parameters = [
            'name'            => 'Yunkyard of : '.$faker->word,
            'location'        => $faker->address .' '.$faker->city,
            'phone_number'    => $faker->phoneNumber,
                ];
        
        $junkyard = new Junkyards($parameters);
        $junkyard->save();
        }
        
    }
}
