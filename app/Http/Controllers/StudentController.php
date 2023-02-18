<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{

    public function index()
    {
        $students = DB::table('students')->get();
        return view('home', compact('students'));
    }
    public function showfilter()
    {
        $students = DB::table('students')->get();
        return view('checkboxfilter', compact('students'));
    }

    public function addStudent(Request $request)
    {


        $student = new Student();

        $student->name = $request->name;
        $student->email = $request->email;
        $student->save();

        return response()->json($student);
    }

    public function showStudent(Request $request)
    {


        $city_id = $request->city_id;
        $name = $request->name;

        //    print_r($city_id);

        // $students = ['name'=>'bhupender'];
        $students = DB::table('students')->whereIn('city_id', $city_id)->get();
        //  $students = DB::table('students')->where('name', $name)->get();
        $students = json_encode($students);
        // return view('checkboxfilter', compact('students'));
        return response()->json($students);
    }


    public function showcheckboxfilter()
    {

        return view('show-checkbox-filter');
    }


    public function formview()
    {

        return view('formview');
    }
    public function insertuser(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'hobby'=>'required'
        ]);
        dd($request->all());
    }
}
