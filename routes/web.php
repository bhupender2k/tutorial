<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/students', [StudentController::class,'index']);
Route::post('/add-student', [StudentController::class,'addStudent'])->name('student.add');


Route::get('/showfilter', [StudentController::class,'showfilter']);
Route::post('/add-student1', [StudentController::class,'showStudent'])->name('student.add1');


Route::get('/checkbox-filter', [StudentController::class,'showcheckboxfilter']);


Route::get('/form', [StudentController::class,'formview']);
Route::post('/form', [StudentController::class,'insertuser']);


Route::get('/dependant', [CityController::class,'index']);
Route::post('/getState', [CityController::class,'getState']);
Route::post('/getCity', [CityController::class,'getCity']);
Route::post('/getValue', [CityController::class,'getValue']);
