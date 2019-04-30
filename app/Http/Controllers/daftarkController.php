<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\kelas;

class daftarkController extends Controller
{
    public function index(){

    if (Auth::user()) {
        return redirect('/daftarkelas');
    }
    return redirect('/login');
    }
    public function tambahk(){

        $kelas = kelas::all();
        return view('daftarkelas', compact('kelas'));
    }

}
