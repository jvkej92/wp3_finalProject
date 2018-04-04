<?php

namespace App\Http\Controllers;

use Auth; 
use DB;
use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Plan;


class subscribeController extends Controller
{   

    //Redirects to registration page
    public function register() {
        return view('subscribe.register');
    }
        
    // checks if a user is registered before redirecting to plan selection page
    public function plans() {
        $user = subscribeController::isNotMember();

        return view('subscribe.plans')->with(['plans' => Plan::get()]);
    }
    
    //Checks if user is register
    //Selects plan that matches plan slug and return the payment view 
    public function payment(Request $request){
        $user = subscribeController::isNotMember();
        $plan = Plan::where('slug', $request['slug'])->first();

        return view('subscribe.payment')->with('plans', $plan);
    }
    
    //Makes sure the user is a member
    //Selects plan by slug
    //checks payment method and subscribes the user 
    //Assignes the user the role of subscribed and redirects to the dashboard
    public function process(Request $request) {     
        $user = subscribeController::isNotMember();
        $plan = Plan::where('slug', $request->slug)->first();
        if($request->has('nonce'))
            $request->user()->newSubscription('main', $plan["braintree_plan"])->create($request["nonce"]);
        else if($request->has('payment_method_nonce'))
            $request->user()->newSubscription('main', $plan->braintree_plan)->create($request->payment_method_nonce);
        else
            return redirect('/subscribe/plans');

        $user = Auth::user();
        $user->assignRole('subscribed');   

        return redirect('/dashboard');

    }

    //Taks a user and checks if it has role subscribed or if it doesn't have the role registered.
    //If either are true it redirects to the home page
    //else return true
    public function isNotMember(){
        $user = Auth::user();
        if(!$user->hasRole('registered') || $user->hasRole('subscribed')){
            return redirect('/');
        }
        else {
            return $user = Auth::user();
        }
    }
}
