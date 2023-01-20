<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PasswordGenerateController;
use App\Models\User;
use Auth;

class PagesController extends Controller
{
    //

    public function home(Request $request)
    {
            return view("password.home");
    }

    public function register()
    {
           return view("user.register");
    }

    public function post_register(Request $request)
    {
        $request->validate([
            'name' => 'required|max:25',
            'email' => 'required|email|max:50',
            'password' => 'required|min:4',
        ]);

        $save_user = User::create([
             'name' => $request->name,
             'email' => $request->email,
             'password' => bcrypt($request->password),
        ]);

        $request->session()->flash('create_success', 'You Have Been Registered Successfully');
        return redirect()->route('register');
    }


    public function login()
    {
        return view("user.login");
    }

    public function post_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:50',
            'password' => 'required|min:4',
        ]);

        $userdata = array(
            'email' => $request->email ,
            'password' => $request->password
        );

        if (Auth::attempt($userdata)){
            // dd(Auth::user()->id);
            return redirect()->route('/');
        }  
        else{
            $request->session()->flash('login_error', 'You Have provided Wrong Credentials');
            return redirect()->route('login');
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flash('logout', 'You Have Loggedout Successfully');
        return redirect()->route('login');
    }
}
