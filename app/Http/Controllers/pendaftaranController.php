<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class pendaftaranController extends Controller
{
    public function index($id){
        $mytime = Carbon::now();
        DB::table('logs')->insert(['started_time'=> $mytime->toDateTimeString(), 'activity'=>'Mulai Pretest', 'user_id'=> Auth::user()->id]);
        DB::table('progres')
        ->where( 'id_materidetail', "")
        ->update(['id_materi'=>$id, 'id_materidetail'=>'pretest']);

        return redirect('pretest');
        
    }

    public function pretest(){
        return view('pretest');
    }

    public function stoppretest(){
        $mytime = Carbon::now();
        DB::table('logs')->insert(['started_time'=> $mytime->toDateTimeString(), 'activity'=>'Selesai Pretest', 'user_id'=> Auth::user()->id]);

        return redirect('/kelaspeserta');
        
    }
}
