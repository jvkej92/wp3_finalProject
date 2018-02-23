<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;
use App\Plan;
use Auth;

class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        $subscription = Subscription::where('user_id', $user->id)->first();
        $plan = Plan::where('braintree_plan', $subscription->braintree_plan)->first();
        return view('dashboard.index')->with([
            'subscription' => $subscription,
            'plan' => $plan
            ]
        );
    }
}
