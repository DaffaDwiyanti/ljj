<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class kpesertaController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $kelas = DB::table('penggunas')->where('userid', $id)->get();
        return view('kelaspeserta', compact('kelas'));
    }

    public function materi($id){
        $materi = DB::table('materis')->where('id_kelas',$id)->get();
        return view('materip', compact('materi'));
    }
    public function materidetail($id){
        $materi = DB::table('materis')->where('id',$id)->get();
        return view('materid', compact('materi'));
    }
}
