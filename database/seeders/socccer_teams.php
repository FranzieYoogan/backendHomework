<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Cast\String_;

class socccer_teams extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        DB::table('soccer_teams')->insert([
            [
            'teamsName' => 'Pain',
            ]
            ]);
            
    }

}
