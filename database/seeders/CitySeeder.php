<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new City();
        for ($i = 1; $i < 37; $i++) {
            for ($j = 1; $j < 2; $j++) {

                $city = new City();
                $city->name = "city"."$j"."st"."$i";
                $city->state_id = $i;
                $city->save();
            }
        }
    }
}
