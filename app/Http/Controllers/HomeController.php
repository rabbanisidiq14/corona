<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $data['request'] = $request;
        $data['konten'] = DB::table('tb_konten')
        ->join('users','tb_konten.id_user','users.id')
        ->select('tb_konten.*','users.username','users.email','users.role')
        ->orderBy('id','desc')
        ->get();
        return view('home',$data);
    }
    public function artikel($id=null, Request $request){
        $data['request'] = $request;
        $data['konten'] = DB::table('tb_konten')->where('id','=',$id)->get();
        return view('pages.artikel',$data);
    }
}
