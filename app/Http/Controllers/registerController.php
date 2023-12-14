<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function submit(Request $request)
    {
        //dd($request->all());
        $data = request()->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new \App\Models\User;
        $user->name = $data['name'];
        $user->surname = $data['surname'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        /*
        $user->adresse = $data['adresse'];
        $user->student_regnum = $data['student_regnum'];
        */
        $user->save();

        return redirect('/login');
    }
}
