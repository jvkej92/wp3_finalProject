<?php

namespace App\Http\Controllers;

use Auth; 
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Plan;

class subscribeController extends Controller
{   

        public function register() {
            return view('subscribe.register');
        }
        
        public function plans() {
            // If user is not registerd or the user has already subscribed redirect to home page
            $user = Auth::user();
            if(!$user->hasRole('registered') || $user->hasRole('subscribed')){
                return redirect('/');
            }
            //Else return the plans page with the data $plans
            else
                return view('subscribe.plans')->with(['plans' => Plan::get()]);
        }
    

        //Loads the payment form with the plan selected on the previous page
        public function payment(Request $request){
            $plan = Plan::where('slug', $request['slug'])->first();
            return view('subscribe.payment')->with('plan', $plan);
        }

        public function validate(array $data){
            return Validator::make($data, [
                'address' => 'required|string|max:255',
                'city' => 'required|string|min:6',
                'state' => 'required|string|min:5',
                'zip' => 'required|string|min:6',
            ]);
        }

        public function create(array $data){
        //gets id of currently logged in user
        $userID = Auth::id;

        //Creates an entry in the shippingAddress table
        $Shipping = Shipping::create([
            'user_id' => $userID,
            'address' => $data['address'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip' => $data['zip']
        ]);

        //Redirects to the user dashboard
        return redirect('/dashboard');
    }
    
    public function process(Request $request) {     
        $user = Auth::user();
        if(!$user->hasRole('registered') || $user->hasRole('subscribed')){
            return redirect('/');
        }
        else {
            //get the plan after submitting the form
            $plan = Plan::where('slug', $request->plan)->first();
            
            //suscribe the user
            if($request->has('nonce'))
                $request->user()->newSubscription('main', $plan->braintree_plan)->create($request->nonce);
            else if($request->has('payment_method_nonce'))
                $request->user()->newSubscription('main', $plan->braintree_plan)->create($request->payment_method_nonce);
            else
                return redirect('/plans');  
    
            //Assign user the role of subscribed    
            $user = Auth::user();
            $user->assignRole('subscribed');   

            //Redirect to home after a successful subscription
            validate($request);
        }
    }
}
