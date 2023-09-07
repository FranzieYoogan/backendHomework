<?php

namespace App\Http\Controllers;
use App\Models\soccer_teams;
use Illuminate\Http\Request;
use Illuminate\View\View;
use \Illuminate\Support\Facades\DB;
class getValue extends Controller
{
    public function getValue() {
        $teamsName = DB::table('soccer_teams')->get();
        
       
        return (view('/get', ['teamsName' => $teamsName]));
        
}

}
