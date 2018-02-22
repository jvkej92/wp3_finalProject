<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Braintree_ClientToken;

class BraintreeTokenController extends Controller
{
    public function token()
    {
        $merchantToken = 'BRAINTREE_MERCHANT_ID';
        
        return response()->json([
            'data' => [
                'token' => Braintree_ClientToken::generate(),
                'merchenToken' => $merchantToken,
            ]
        ]);
    }

}
