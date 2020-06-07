<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Auth;
use Validator;
use App\User;
use Illuminate\Support\Facades\Hash;
use Redirect;

class ArtikelController extends Controller
{
    //Ini Form Buat tambah atau edit(mungkin)
    public function showViewForm(Request $request){
        $data['request'] = $request;
        $data['tipe'] = 'buat';
        return view('artikels.form',$data);
    }
    //script tambah artikel
    public function submitTambah(Request $request){
        $data['konten'] = $request->all();
        $data['now'] = Carbon::now()->addHours(7);
        $username = $request->session()->get('username');
        $uploader = DB::table('users')->where('username','=',$username)->get();
        $uploaderID = $uploader[0]->id;
        $allData = array(
            'judul' => $data['konten']['judul'],
            'konten' => $data['konten']['konten'],
            'kategori' => $data['konten']['kategori'],
            'diunggah_pada' => $data['now'],
            'diedit_pada' => $data['now'],
            'id_user' => $uploaderID
        );
        DB::table('tb_konten')->insert($allData);
        return redirect(url('/'));
    }
    //nampilin daftar artikel saya
    public function daftarArtikel(Request $request){
        $data['request'] = $request;
        $username = $request->session()->get('username');
        $data['daftar'] = DB::table('tb_konten')
        ->join('users','tb_konten.id_user','users.id')
        ->select('tb_konten.*','users.username','users.email','users.role')
        ->where('username','=',$username)
        ->orderBy('id','desc')
        ->get();
        if($request->session()->has('username'))return view('artikels.artikelSaya',$data);
        else return redirect(url('/user/login'));
    }

    //Edit Gengs
    public function showViewEdit($id,Request $request){
        $data['request'] = $request;
        $username = $request->session()->get('username');
        $data['tipe'] = 'edit';
        $data['id'] = $id;
        $data['konten'] = DB::table('tb_konten')
        ->join('users','tb_konten.id_user','users.id')
        ->select('tb_konten.*','users.username','users.email','users.role')
        ->where('username','=',$username)
        ->where('tb_konten.id','=',$id)
        ->get();
        return view('artikels.form',$data);
    }

    public function submitEdit(Request $request){
        $data['konten'] = $request->all();
        $data['now'] = Carbon::now()->addHours(7);
        DB::table('tb_konten')->where('id',$data['konten']['id'])->update([
            'judul' => $data['konten']['judul'],
            'konten' => $data['konten']['konten'],
            'kategori' => $data['konten']['kategori'],
            'diedit_pada' => $data['now']
        ]);
        return redirect(url('/artikel/daftar'));
    }

    //Akhirnya delete
    public function submitdelete($id, Request $request){
        $username = $request->session()->get('username');
        $data['temp'] = DB::table('tb_konten')
        ->join('users','tb_konten.id_user','users.id')
        ->where('username',$username)
        ->where('tb_konten.id',$id)
        ->delete();
        return redirect(url('/artikel/daftar'));
    }
}
