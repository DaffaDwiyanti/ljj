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
$user = Auth::user()['id'];

if($user==null){

    $materis = DB::table('materis')->where('id_kelas', $id)->get();
    $mytime = Carbon::now();
    DB::table('logs')->insert(['started_time'=> $mytime->toDateTimeString(), 'activity'=>"Lihat Kelas $id", 'user_id'=> ""]);
    DB::table('progres')->insert(['id_kelas'=>"$id", 'user_id'=> ""]);

    return view('joink',compact('materis'));
}else{

    $materis = DB::table('materis')->where('id_kelas', $id)->get();
    $mytime = Carbon::now();
    DB::table('logs')->insert(['started_time'=> $mytime->toDateTimeString(), 'activity'=>"Lihat Kelas $id", 'user_id'=> $user]);
    DB::table('progres')->insert(['id_kelas'=>"$id", 'user_id'=> $user]);

    return view('joink',compact('materis'));
}
    }
}
