<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\materi;

class WelcomeController extends Controller
{
    public function index(){
        $kelas = DB::table('kelas')->get();
        return view('welcome', ['kelas'=>$kelas]);
    }
    public function join($id){
//buat join kelas/ liat kelas
        $materis = DB::table('materis')->where('id_kelas', $id)->get();
        // $materis = materi::where('id_kelas', '$id')->get();
        return view('joink',compact('materis'));
    }
}
