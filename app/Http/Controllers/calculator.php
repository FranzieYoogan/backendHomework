<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculator extends Controller
{
    public function operation(Request $request) {
        $input1 = $request->input('input1');
        $input2 = $request->input('input2');
        $result = 0;
        $selectOption = $request->input('selectOption');
        if($selectOption == '+') {
   $result = $input1 + $input2;



        }
        if($selectOption == '-') {
       $result = $input1 - $input2;
     
   
    }

    if($selectOption == '*') {
     $result = $input1 * $input2;


}

if($selectOption == '/') {
   $result = $input1 / $input2;


}

return (view('/calculator', ['result' => $result]));
}
}