<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class create_rooms extends Controller
{
    public function index()
    {
        $f = 5;
        $m = 5;

        DB::table('chambers')
        ->delete();



        for( $i = 0; $i < $m; $i++ )
        {
            DB::table('chambers')->insert([
                'gender' => 'm',
                'chamber_num' => (string) $i+1,
            ]);
        }

        for( $i = 0; $i < $f; $i++ )
        {
            DB::table('chambers')->insert([
                'gender' => 'f',
                'chamber_num' => (string) $i+1,
            ]);
        }

        dd('rooms created');
    }
}
