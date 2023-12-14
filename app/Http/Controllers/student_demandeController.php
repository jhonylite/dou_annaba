<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Auth;

use Illuminate\Http\Request;

class student_demandeController extends Controller
{
    public function index()
    {
        $demande = DB::table('demandes')
        ->where('user_id', Auth::user()->id)
        ->orderBy('status', 'desc')
        ->first();

        if($demande == null)
        {
            return view('app.send_demande');
        }
        else
        {
            $student_info = DB::table('students')
            ->where('user_id', Auth::user()->id)
            ->first();

            if($demande->status == 2)
            {
                // go to resedent info page

                $chamber = DB::table('chambers')
                ->where('user_1', Auth::user()->id)
                ->orWhere('user_2', Auth::user()->id)
                ->first();
                return view('app.chomber_info' , ['chamber' => $chamber , 'student_info' => $student_info]);
            }
            else if($demande->status == 1)
            {
                //go to wating for admin page
                //dd($student_info);
                //dd($demande);
                return view('app.demande_in_process',['student_info' => $student_info , 'demande' => $demande]);
            }
            else if($demande->status == 0)
            {
                $message = DB::table('messages')
                ->where('user_id', Auth::user()->id)
                ->orderBy('created_at', 'desc')
                ->first();
                //dd($message);
                return view('app.send_demande',['message' => $message]);
                //go to refused send new demande page
                return 'demande refused send new demande';
            }

            return 'error';
        }
    }

    //for old pre registerd students
    public function index_registered()
    {
        $demande = DB::table('demandes')
        ->where('user_id', Auth::user()->id)
        ->orderBy('status', 'desc')
        ->first();


        //dd($demande);
        if($demande == null)
        {
            return view('app.send_demande_registered');
        }
        else
        {
            if($demande->status == 2)
            {
                return redirect('home/demande');
            }
            else if($demande->status == 1)
            {
                return redirect('home/demande');
            }
            else if($demande->status == 0)
            {
                $message = DB::table('messages')
                ->where('user_id', Auth::user()->id)
                ->orderBy('created_at', 'desc')
                ->first();
                return view('app.send_demande_registered',['message' => $message]);
            }

            return 'error';
        }
    }

    // receve and store demande
    public function send_demande(Request $request)
    {
        $docs = "";
        foreach($request->doc as $doc)
        {
            $docs .= $doc. ' [splitter] ';
        }

        DB::table('demandes')->insert([
            'user_id' => Auth::user()->id,
            'degree' => $request->grade,
            'condition' => $request->maladie,
            'docs' => $docs,
        ]);

        return redirect('home/demande');
    }
}
