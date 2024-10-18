<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);
        $user = User::create($data);

        // $user = User::create($data)
        if($user){
            return redirect()->route('login');
        }


        return view('auth.register');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard.index');
        }
        return back()->withErrors(['email' => 'The provided credentials do not match our records.'])->withInput($request->only('email'));

    }


    public function dashboardPage()
    {
        if(Auth::check()){
            return view('admin.examples.index');
        }else{
            return redirect()->route('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('login');
    }


    public function innerPage()
    {
        if(Auth::check())
        {
            return view('admin.examples.sample-page');
        }
        else
        {
            return redirect()->route('login');
        }
    }



}
