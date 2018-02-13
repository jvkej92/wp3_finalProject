<?php

namespace App\Http\Controllers;

use App\User;
use App\ShippingInfo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\http\Request;
use Carbon\Carbon;

class registrationFormController extends Controller
{
    use RegistersUsers;

    //Where the user is redirected after registration
    protected $redirectTo = '/home';

    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $data){
        if($data['sectionID'] = "personal") {
            $current = Carbon::today();
            $validDate = $current->subYears(21);
            return $data->validate([
                'name' => 'required|string|max:70',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
                'birthday' => 'required|date|before:' . $validDate,
            ]);
        }
        else if($data['shipping'] = "personal") {
            return $data->validate([
                'address' => 'required|string|max:95',
                'city' => 'required|string|max:100',
                'state' => 'exists:states, state',
                'zip' => 'exists:states, zip'
            ]);
        }
    }
}
