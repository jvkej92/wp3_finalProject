<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use App\Subscription;

class SubscriptionsController extends Controller
{
    public function subscribe(Request $request) {
        
        //get the plan after submitting the form
        $plan = Plan::where('slug', $request->plan)->first();

        //suscribe the user
        $request->user()->newSubscription('main', $plan->braintree_plan)->create($request->payment_method_nonce);
    
        //Redirect to home after a successful subscription
        return view('home');
    }    

}