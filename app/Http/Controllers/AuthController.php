<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Fee;
class AuthController extends Controller
{
    public function login() 
    {
        return view('auth.login');
    }
    public function register() 
    {
        return view('auth.register');
    } 
    public function loginsystem(Request $request) 
    {

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            return redirect()->intended('/dashboards/');
        }
        else {

            return ("Error");
        }
    
    }

    public function registersystem(Request $request, )
    {
        // $userid = auth()->user()->id;
        $confirm = $request->confirmpassword;
        if(strlen($request->card) == 8)
        {
            if($request->password == $confirm)
            {
                $users = User::create([
                    'username' => $request->username,
                    'email' => $request->email,
                    'card' => $request->card,
                    'password' => bcrypt($request->password),
                    'course' => $request->course,
                ]);
        
                auth()->login($users);
                return redirect()->intended('/dashboards/');
            }
            else{
                echo "passwords do not suit each other !" .  " " ."<a href='/register'>Go back</a>" ;
            }
        }
        else{
            echo "Card number must be exactly 8 digits long!" .  " " ."<a href='/register'>Go back</a>" ;
        }
        
    
    }
    public function logout(Request $request) 
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
