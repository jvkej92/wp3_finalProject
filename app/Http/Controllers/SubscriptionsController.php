<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\plan;

class SubscriptionsController extends Controller
{
    public function store(Request $request) {
        //get the plan after submitting the form
        $plan = Plan::findOrFail($request->plan);
        
        //suscribe the user
        $request->user()->newSubscription('main', $plan->braintree_plan)->create($request->payment_method_nonce);
    
        //Redirect to home after a successful subscription
        return redirect('home');
    }    

}