<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function login() {
        return view('admin.login');
    }


    public function login_proses(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        if (Auth::attempt($data)) {
            return redirect('/xdadm');
        }else {
            return redirect()->route('login')->with('error', 'Email atau Password salah');
        };
    }

    public function register() {
        return view('admin.register');
    }

    public function register_proses(Request $request) {
       $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
       ]);

       $data['nama'] = $request->nama;
       $data['email'] = $request->email;
       $data['password'] = Hash::make($request->password);

       User::create($data);

       $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        if (Auth::attempt($login)) {
            return redirect()->route('admin.index');
        }else {
            return redirect()->route('login')->with('error', 'Email atau Password salah');
        };
    }

    public function logout(Request $request){
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('login');
    }
}