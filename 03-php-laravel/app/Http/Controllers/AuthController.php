<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $req){
        return view('index');
    }

    public function auth(Request $request){
        $data = User::where('username', $request->username)->first();
        if($data){
            if($data->password == $request->password){
                session(['authenticated' => true]);
                $request->session()->put('username', $data['name']);
                Session::put('login',true);
                if(session('role') == 1){
                    return redirect('index');
                }
                     return redirect('index');
            }
        }
        return redirect('')->with('message', 'Wrong Username or Password');
    }

    public function logout(){
        session()->pull('username');
        Session::flush();
        return redirect('');
    }

    public function authenticating(Request $request){
        $data = User::where('username', $request->username)->first();
        if($data)
        {
            if($data->password == $request->password)
            {
                return ('Login success!');
            }
        }
        return ('Wrong Username or Password!'); 
    }
}
