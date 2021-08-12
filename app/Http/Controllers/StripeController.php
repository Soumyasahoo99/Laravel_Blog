<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe;
use Session;
use App\Models\User;
class StripeController extends Controller
{
    //
    public function stripe()
    {
        return view('stripe');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripepayment(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 150,
                "currency" => "inr",
                "source" => $request->stripeToken,
                "description" => "Making test payment." 
        ]);
  
      
          
        


        if ($request->stripeToken) {
            $id=Auth::user()->id;
            User::where('id',$id)->update(['stripe_id'=>'1']);
        }
        return redirect('home');   
    }
    public function cancellpayment()
    {
        $id=Auth::user()->id;
        User::where('id',$id)->update(['stripe_id'=>'0']);
        return redirect('paymentplan');   
 
    }



}
