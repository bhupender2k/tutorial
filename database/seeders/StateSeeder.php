<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            [ 'name'=>'Andaman Nicobar','country_id'=>'1','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['name'=>'Andhra Pradesh' ,'country_id'=>'1','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Arunachal Pradesh' ,'country_id'=>'1','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Assam' ,'country_id'=>'1','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Bihar' ,'country_id'=>'1','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Chandigarh' ,'country_id'=>'1','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Chhattisgarh' ,'country_id'=>'2','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Dadra and Nagar Haveli and Daman and Diu' ,'country_id'=>'2','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Delhi' ,'country_id'=>'2','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Goa' ,'country_id'=>'2','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Gujarat' ,'country_id'=>'2','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Haryana' ,'country_id'=>'2','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Himachal Pradesh' ,'country_id'=>'2','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Jammu Kashmir' ,'country_id'=>'2','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Jharkhand' ,'country_id'=>'2','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Karnataka' ,'country_id'=>'2','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Kerala' ,'country_id'=>'2','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Lakshadweep' ,'country_id'=>'3','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Ladakh' ,'country_id'=>'3','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Madhya Pradesh' ,'country_id'=>'3','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Maharashtra' ,'country_id'=>'3','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Manipur' ,'country_id'=>'3','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Meghalaya' ,'country_id'=>'3','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Mizoram' ,'country_id'=>'3','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Nagaland' ,'country_id'=>'3','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Odisha' ,'country_id'=>'3','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Puducherry' ,'country_id'=>'3','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Punjab' ,'country_id'=>'3','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Rajasthan' ,'country_id'=>'3','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Sikkim' ,'country_id'=>'3','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Tamil Nadu' ,'country_id'=>'3','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Telangana' ,'country_id'=>'3','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Tripura' ,'country_id'=>'1','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Uttar Pradesh' ,'country_id'=>'1','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'Uttarakhand' ,'country_id'=>'1','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ],
            ['name'=>'West Bengal' ,'country_id'=>'1','created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s") ]

        ]);
    }
}
