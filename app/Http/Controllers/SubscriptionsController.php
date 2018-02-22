<?php

namespace App\Http\Controllers;

use Auth; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Plan;
use App\Subscription;


class SubscriptionsController extends Controller
{
      public function subscribe(Request $request) {
        $user = Auth::user();
        echo $user;
        if($user->hasRole('subscribed')){
            return redirect('/');
        }
        else {
            //get the plan after submitting the form
            $plan = Plan::where('slug', $request->plan)->first();

            //suscribe the user
            $request->user()->newSubscription('main', $plan->braintree_plan)->create($request->payment_method_nonce);
        
            $user->assignRole('subscribed');    
            //Redirect to home after a successful subscription
            return view('home');
        }
    }    
}