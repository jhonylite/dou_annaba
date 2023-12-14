<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Auth;

use Illuminate\Http\Request;

class demandesController extends Controller
{
    public function index()
    {
        $demandes = DB::table('demandes')
        ->where('status', '=', '1')
        ->join('users', 'users.id', '=', 'demandes.user_id')
        ->join('students', 'students.user_id', '=', 'users.id')
        ->select('demandes.id as id','demandes.degree as degree','demandes.created_at as created_at','users.id as user_id', 'users.name as name' , 'users.surname as surname','students.gender as gender' )
        ->get();
        return view('app.admin_demandes', ['demandes' => $demandes]);
    }
}
