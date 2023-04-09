<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

class Authcontroller extends Controller
{
    public function login(){
        return view('auth/login');
    }

    public function register(){
        return view('auth/register');
    }

    public function cek_login(Request $request){
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            session()->flash('login_success','');
            return redirect('/');
        }else{
            session()->flash('login_failed','');
            return redirect('/login');
        }
    }

    public function simpanuser(Request $request){
        $Username = $request->username;
        $No_hp = $request->no_hp;
        $Email = $request->email;
        $Role = $request->role;
        $Password = $request->password;

        if(($Username == null) || ($No_hp == null) || ($Email == null) || ($Password == null)){

            session()->flash('register_failed','');
            return redirect('/register');
            
        }
        else{
            $user = User::create([
                'username' => $Username,
                'email' => $Email,
                'no_hp' => $No_hp,
                'role' => $Role,
                'password' => bcrypt($Password)
            ]);
            session()->flash('register_succes','');
            return redirect('/login');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}
