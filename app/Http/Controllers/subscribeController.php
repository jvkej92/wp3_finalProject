<?php

namespace App\Http\Controllers;

use Auth; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Plan;

class subscribeController extends Controller
{
        public function plans()
        {
            // $user = Auth::user();
            // if(!$user->hasRole('registered') || $user->hasRole('subscribed')){
            //     return redirect('/');
            // }
            return view('subscribe.plans')->with(['plans' => Plan::get()]);
        }
    
        public function subscribe(Request $request) {
            //get the plan after submitting the form
            $plan = Plan::where('slug', $request->plan)->first();
            
            //suscribe the user
            if($request->has('nonce'))
                $request->user()->newSubscription('main', $plan->braintree_plan)->create($request->nonce);
            else if($request->has('payment_method_nonce'))
                $request->user()->newSubscription('main', $plan->braintree_plan)->create($request->payment_method_nonce);
            else
                return redirect('/plans');  
    
            $user = Auth::user();
            $user->assignRole('subscribed');    
            //Redirect to home after a successful subscription
            create($request);
        }

        public function payment(Request $request){
            $plan = Plan::where('slug', $request->plan)->first();
            return view('subscribe.payment')->with('plan', $plan);
        }

        protected function create(array $data)
    {
        $userID = Auth::id;

        $Shipping = Shipping::create([
            'user_id' => $userID,
            'address' => $data['address'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip' => $data['zip']
        ]);
        return redirect('/dashboard');
    }
}
