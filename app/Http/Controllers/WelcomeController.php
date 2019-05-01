<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\materi;
use Carbon\Carbon;
use Auth;

class WelcomeController extends Controller
{
    public function index(){
        $kelas = DB::table('kelas')->get();
        return view('welcome', ['kelas'=>$kelas]);
    }
    public function join($id){
//buat join kelas/ liat kelas
        $materis = DB::table('materis')->where('id_kelas', $id)->get();
        $mytime = Carbon::now();
        DB::table('logs')->insert(['started_time'=> $mytime->toDateTimeString(), 'activity'=>"Lihat Kelas $id", 'user_id'=> Auth::user()->id]);
        DB::table('progres')->insert(['id_kelas'=>"$id", 'user_id'=> Auth::user()->id]);

        return view('joink',compact('materis'));
    }
}
