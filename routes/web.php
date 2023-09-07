<?php

use App\Http\Controllers\calculator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\getValue;
use App\Http\Controllers\randomNumber;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});




Route::get("/get",[getValue::class,'getValue']);

Route::get('/home', function () {
    return view('home');
});



Route::get("/randomNumbers",[randomNumber::class,'randomNumber']);


Route::get("/calculator",[calculator::class,'operation']);