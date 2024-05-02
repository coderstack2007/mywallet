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

            return ("<center><h1>Username or password is wrong!</h1> <hr> <a href='/'>Back to Authintication </a></center>");
        }
    
    }

    public function registersystem(Request $request, )
    {
        // $userid = auth()->user()->id;
        $confirm = $request->confirmpassword;
        if(strlen($request->card) == 19)
        {
            if($request->password == $confirm)
            {
                $zero = 1000;
                $users = User::create([
                    'username' => $request->username,
                    'email' => $request->email,
                    'card' => $request->card,
                    'password' => bcrypt($request->password),
                    
                    'balance' => $zero,
                ]);
        
                auth()->login($users);
                return redirect()->intended('/dashboards/');
            }
            else{
                echo "passwords do not suit each other !" .  " " ."<a href='/register'>Go back</a>" ;
            }
        }
        else{
            echo "Card number must be exactly 16 digits long!" .  " " ."<a href='/register'>Go back</a>" ;
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
