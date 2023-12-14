<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class demandeController extends Controller
{
    public function check_demande(Request $request)
    {
        //dd($request->all());

        $demande = DB::table('demandes')
        ->where('id',$request->demande_id)
        ->first();

        $student_info = DB::table('students')
        ->where('user_id', $request->user_id)
        ->first();

        return view('app.check_demande',['student_info' => $student_info , 'demande' => $demande]);
    }
}
