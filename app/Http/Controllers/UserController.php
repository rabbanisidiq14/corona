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

class UserController extends Controller
{
    //<<< Ini Register
    public function showRegisterView(Request $request){
        $data['request'] = $request;
        if($request->session()->has('username')){
            return redirect(url('/'));
        }
        return view('pages.register',$data);
    }
    public function insertDataUser(Request $request){
        $data = $request->all();
        User::create(array(
            'username' => $data['username'],
            'email' =>$data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'member'
        ));
        return redirect(route('home'));
    }
    //>>> Ini Register

    //<<<Ini Login
    public function showLoginView(Request $request){
        $data['request'] = $request;
        if($request->session()->has('username')){
            return redirect(url('/'));
        }
        return view('pages.login',$data);
    }
    public function checkLogin(Request $request){
        $data = $request->all();
        if(Auth::attempt(array(
            'username'=>$data['username'],
            'password' => $data['password'])
        )){
            $request->session()->put('username',$data['username']);
            return Redirect::to(url('/'));
        }
        else{
            return Redirect::to(url('/user/login'));
        }
    }
    //>>>Ini Login

    //>>>Ini Logout
    public function doLogout(Request $request){
        $request->session()->flush();
        return redirect(url('/'));
    }
    //<<<Ini Logout

    public function showProfile(Request $request){
        if($request->session()->has('username')){
            $username = $request->session()->get('username');
            $data['request'] = $request;
            $data['profile'] = DB::table('users')->where('username','=',$username)->get();
            return view('pages.profile', $data);
        }
        else{
            return redirect(url('/'));
        }
    }
}