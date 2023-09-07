<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class randomNumber extends Controller
{
    public function randomNumber() {
      $number = (rand(10,100));
      return (view('/randomNumbers', ['number' => $number]));
      
    }
}
