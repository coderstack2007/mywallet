<?php

namespace App\Http\Controllers;

use App\Models\Spendings;
use Illuminate\Http\Request;

class SpendingsController extends Controller
{
    #House
    public function house()
    {
        return view('spendings.house');
    }
     #Food and Drinks
     public function food_and_drinks()
     {
         return view('spendings.food');
     }
     #Education
     public function education()
     {
         return view('spendings.education');
     }
    public function first(Request $request)
    {
        $spendings = Spendings::create([
            'cost' => $request->cost,
            'type' => $request->type,
            'expenture' => $request->expenture,
            'user_id' => $request->user_id,
        ]);
        session()->flash('status', 'Successfully paid!');
        return redirect()->intended('/dashboards/');
    }

   
    public function second(Request $request)
    {
        $spendings = Spendings::create([
            'cost' => $request->cost,
            'type' => $request->type,
            'user_id' => $request->user_id,
            'expenture' => $request->expenture,

        ]);
       

        session()->flash('status', 'Successfully paid!');
        
        return redirect()->intended('/dashboards/');
    }
   
}
