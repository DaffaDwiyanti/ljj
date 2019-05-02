<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class pendaftaranController extends Controller
{
    public function index($id){
        $user =  Auth::user()['id'];

        if($user==null){

        return redirect('/login');
        
        }else{
        $idprogres = DB::table('progres')->orderBy('id','desc')->first();
        $mytime = Carbon::now();
        DB::table('logs')->insert(['started_time'=> $mytime->toDateTimeString(), 'activity'=>'Mulai Pretest', 'user_id'=>$user]);
        DB::table('progres')
        ->where('id', $idprogres->id)
        ->where('user_id', $user)
        ->update(['id_materi'=>$id, 'id_materidetail'=>'100']);

        return redirect('pretest');
        
        }
    }

    public function pretest(){

        return view('pretest');
    }

    public function stoppretest(){
        $mytime = Carbon::now();
        DB::table('logs')->insert(['started_time'=> $mytime->toDateTimeString(), 'activity'=>'Selesai Pretest', 'user_id'=> Auth::user()->id]);

        return redirect('/kelaspeserta');
        
    }

    public function stopquiz(){
        $mytime = Carbon::now();
        DB::table('logs')->insert(['started_time'=> $mytime->toDateTimeString(), 'activity'=>'Selesai Quiz', 'user_id'=> Auth::user()->id]);

        return redirect('/kelaspeserta');
        
    }
    public function stopkompre(){
        $mytime = Carbon::now();
        DB::table('logs')->insert(['started_time'=> $mytime->toDateTimeString(), 'activity'=>'Selesai Kompre', 'user_id'=> Auth::user()->id]);

        return redirect('/kelaspeserta');
        
    }

    public function stoppenugasan(){
        $mytime = Carbon::now();
        DB::table('logs')->insert(['started_time'=> $mytime->toDateTimeString(), 'activity'=>'Selesai Penugasan', 'user_id'=> Auth::user()->id]);

        return redirect('/kelaspeserta');
        
    }
    public function stopposttest(){
        $mytime = Carbon::now();
        DB::table('logs')->insert(['started_time'=> $mytime->toDateTimeString(), 'activity'=>'Selesai Posttest', 'user_id'=> Auth::user()->id]);

        return redirect('/kelaspeserta');
        
    }
}
