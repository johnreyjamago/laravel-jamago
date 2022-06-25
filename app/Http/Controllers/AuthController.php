<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
class AuthController extends Controller
{
    public function login(){
        return view("auth.login");

    }
    public function registration(){
        return view("auth.registration");

    }
    public function registerUser(Request $request){
        $request->validate([
            'studentid'=>'required',
            'firstname'=>'required', 
            'lastname'=>'required',
            'mi'=>'required', 
            'course'=>'required',
            'yearlevel'=>'required', 
            'username'=>'required|unique:users',
            'password'=>'required'
        ]);
        $user = new User();
        $user->studentid = $request->studentid;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->mi = $request->mi;
        $user->course = $request->course;
        $user->yearlevel = $request->yearlevel;
        $user->username = $request->username;
        $user->password =  Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success', 'You have registered successfully');
        }else{
            return back()->with('fail', 'Something wrong');
        }
    }
    public function loginUser(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $user = User::where('username', '=', $request->username)->first();
        if($user){
            if (Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->studentid);
                return redirect('/users');
            }else{
                return back()->with('fail', 'Invalid Credentials');
            }
        }else{
            return back()->with('fail', 'Invalid Credentials');
        }
    }
    public function users(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('studentid', '=', Session::get('loginId'))->first();
        
        }
        return view('/users', compact('data'));

    }
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login'); 
        }
    }
}