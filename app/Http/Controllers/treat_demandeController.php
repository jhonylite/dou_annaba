<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class treat_demandeController extends Controller
{
    public function apr(Request $request)
    {
        $demande = DB::table('demandes')
        ->where('id' , $request->demande_id)
        ->join('students' , 'demandes.user_id' , 'students.user_id')
        ->first();

        //dd($demande);
        if($demande->gender == 'f')
        {
            $room = DB::table('chambers')
            ->where(function($query) {
                $query->where('user_1' , null)
                ->orWhere('user_2' , null);
            })
            ->where('gender' , 'f')
            ->first();

            if ($room == null)
            {
                return 'no room';
            }

            if($room->user_1 == null)
            {
                DB::table('chambers')
                ->where('id' , $room->id)
                ->update(['user_1' => $demande->user_id]);
            }
            else if($room->user_2 == null)
            {
                DB::table('chambers')
                ->where('id' , $room->id)
                ->update(['user_2' => $demande->user_id]);
            }

            DB::table('demandes')
            ->where('id' , $request->demande_id)
            ->update(['status' => 2]);
        }
        else
        {
            $room = DB::table('chambers')
            ->where(function($query) {
                $query->where('user_1' , null)
                ->orWhere('user_2' , null);
            })
            ->where('gender' , 'm')
            ->first();

            if ($room == null)
            {
                return 'no room';
            }

            if($room->user_1 == null)
            {
                DB::table('chambers')
                ->where('id' , $room->id)
                ->update(['user_1' => $demande->user_id]);
            }
            else if($room->user_2 == null)
            {
                DB::table('chambers')
                ->where('id' , $room->id)
                ->update(['user_2' => $demande->user_id]);
            }

            DB::table('demandes')
            ->where('id' , $request->demande_id)
            ->update(['status' => 2]);
        }

        return redirect('/home/demandes');

    }

    public function dis(Request $request)
    {
        //dd($request->all());

        DB::table('demandes')
        ->where('id', $request->demande_id)
        ->update([
            'status' => '0',
        ]);

        DB::table('messages')
        ->insert([
            'message' => $request->reason,
            'user_id' => $request->user_id,
        ]);

        return redirect('/home/demandes')->with('success', 'Demande refusée avec succès');
    }
}
