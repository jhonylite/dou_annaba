<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function submit(Request $request)
    {
        $this->validate($request ,[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(Auth::attempt(['email' => $request->input('email'), 'password' =>$request->input('password')]))
        {
            return redirect('/home');
        }
        else
        {
            return back()->with('error','login error');
        }
    }
}
