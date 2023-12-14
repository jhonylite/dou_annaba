<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class homeController extends Controller
{
    public function index()
    {
        if (Auth::user()->type == 2)
        {
            $users = DB::table('users')
            ->orderBy('type', 'desc')
            ->get();

            return view('app.admin' , ['users' => $users]);
        }
        else if(Auth::user()->type == 1)
        {
            return redirect('/home/demande');
        }
        else
        {
            return view('app.confirme_student');
        }
    }
}
