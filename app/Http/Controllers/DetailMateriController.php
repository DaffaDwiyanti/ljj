<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailMateriController extends Controller
{
    public function index($id){
        $details = DB::table('materidetails')->where('id_materi', $id)->get();
        return view('detailM', compact('details'));
    }
    
}
