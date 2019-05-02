<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Carbon\Carbon;

class kpesertaController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $kelas = DB::table('penggunas')->where('userid', $id)->get();
        return view('kelaspeserta', compact('kelas'));
    }

    public function materi($id){

        $idprogres = DB::table('progres')->where('user_id', Auth::user()->id)->orderBy('id','desc')->first();
        // return $progres;
        if( $id <= $idprogres->id_materi){
            
        if($idprogres->id_materidetail == 100){
            $materi = DB::table('materis')->where('id_kelas',$id)->get();
            DB::table('progres')
            ->where( 'id', $idprogres->id)
            ->update(['id_materidetail'=>'1']);
            return view('materip', compact('materi'));
        }else{
            return "anda belum melakukan pretest";
        }
    }else{
        return "Anda Belum menyelesaikan materi sebelumnya";
    }
    }
    public function submateri($id){
        $progres = DB::table('progres')->where('user_id', Auth::user()->id)->orderBy('id', 'desc')->first();
       
        // return $progres;
        if($id <= $progres->id_materi ){
           $submateri = DB::table('materidetails')->where('id_materi',$id)->get();
           DB::table('progres')->where( 'user_id', Auth::user()->id)->update(['id_materidetail'=>$id]);
           return view('submateri', compact('submateri'));
        }else{
            return "Anda belum menyelesaikan quiz materi sebelumnya";
        }
    }
    public function materidetail($id){

        $progres = DB::table('progres')->where('user_id', Auth::user()->id)->orderBy('id','desc')->first();
        // return $progres;
        if( $id <= $progres->id_materidetail){
        $mytime = Carbon::now();
        DB::table('logs')->insert(['started_time'=> $mytime->toDateTimeString(),'activity'=>"Mulai SUBMateri $id", 'user_id'=>Auth::user()->id]);
        
        $materi = DB::table('materidetails')->where('id',$id)->get();
        return view('materid', compact('materi'));
        }else{
            return "Anda belum menyelesaikan penugasan submateri sebelumnya";
        }
    }

    public function materidetailselesai($id){
        $mytime = Carbon::now();
        DB::table('logs')->insert(['started_time'=>$mytime->toDateTimeString(), 'activity'=>"Selesai Materi $id", 'user_id'=>Auth::user()->id]);
        DB::table('progres')->where('user_id', Auth::user()->id)->update(['id_materidetail'=>$id+1]);

        return redirect('/kelaspeserta');
    }

    public function quiz(){
        DB::table('logs')->insert(['started_time'=>$mytime->toDateTimeString(), 'activity'=>"Mulai Quiz $id", 'user_id'=>Auth::user()->id]);
        return view('quiz');
    }
    public function penugasan(){
        DB::table('logs')->insert(['started_time'=>$mytime->toDateTimeString(), 'activity'=>"Mulai Quiz $id", 'user_id'=>Auth::user()->id]);
        return view('penugasan');

    }
    public function kompre(){
        DB::table('logs')->insert(['started_time'=>$mytime->toDateTimeString(), 'activity'=>"Mulai Kompre $id", 'user_id'=>Auth::user()->id]);
        return view('kompre');

    }
    public function posttest(){
        DB::table('logs')->insert(['started_time'=>$mytime->toDateTimeString(), 'activity'=>"Mulai Posttest $id", 'user_id'=>Auth::user()->id]);
        return view('posttest');

    }
}
