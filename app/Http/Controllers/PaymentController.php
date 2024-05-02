<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
        public function payment(User $user)
        {
            $users = User::all();
            return view('payments.payment', compact('users'));
        }
        public function window(User $user)
        {
            return view('payments.window')->with(['user' => $user]);
        }
        public function process(Request $request, User $user, Payment $payment)
        {
            $amount = $request->amount;
          
            if(auth()->user()->balance >= $amount){  
                $total = $user->balance + $amount; 
            
        
                $user->update([
                    'username' => $request->username,
                    'email' => $request->email,
                    'card' => $request->card,
                    'password' => $request->password,
                    'balance' => $total,
                    
                ]);
            }
            else{
                return redirect()->back();
            }
            $payment->create([
                'amount' => $amount,
                'user_id' => $user->id,
                'card' => $request->card,
                'payer' => auth()->user()->id,
                'positive' => true,
                'negative' => true,
            ]);
            $currentBalance = auth()->user()->balance; 
            $newCurrentBalance = $currentBalance - $request->amount; 
            auth()->user()->update([
                'balance' => $newCurrentBalance,
            ]);
        
            

            return redirect('dashboards');
        }
        
       
        
}
