<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class confirme_studentController extends Controller
{
    public function confirme_student(Request $request)
    {
        DB::table('students')->insert([
            'user_id' => Auth::user()->id,
            'birth' => $request->b_date,
            'phone' => $request->phone,
            'address' => $request->address,
            'reg_num' => $request->reg_num,
            'father_surname' => $request->father_sn,
            'mother_surname' => $request->mother_sn,
            'gender' => $request->gender,
        ]);

        DB::table('users')
        ->where('id' , Auth::user()->id)
        ->update(['type' => 1]);

        Auth::user()->fresh();

        return redirect()->back();
    }
}
