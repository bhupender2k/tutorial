<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function index()
    {
        $countries = DB::table('countries')->orderBy('name')->get();
        $data = compact('countries');
        return view('dependant', $data);
    }

    public function getState(Request $request)
    {
        $country_id = $request->post('country_id');
        // echo $country_id ;

        $states = DB::table('states')
            ->where('country_id', $country_id)
            ->get();

        foreach ($states as $state) {
            echo "<option value=\"$state->id\">$state->name</option>";
        }
    }
    public function getCity(Request $request)
    {
        $state_id = $request->post('state_id');
        // echo $country_id ;

        $cities = DB::table('cities')
            ->where('state_id', $state_id)
            ->get();

        foreach ($cities as $city) {
            echo "<option value=\"$city->id\">$city->name</option>";
        }
    }
    public function getValue(Request $request)
    {
       
print_r($request->all());

    }




}
