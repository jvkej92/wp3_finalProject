<?php

namespace App\Http\Controllers;

use App\User;
use App\Shipping;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\http\Request;
use Carbon\Carbon;

class registrationFormController extends Controller
{
    use RegistersUsers;

    //Where the user is redirected after registration
    protected $redirectTo = '/membership';

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

    protected function create(Request $data)
    {
        $user = new User;

        $user->name = $data->name;
        $user->email = $data->email;
        $user->password = $data->password;
        $user->birthday = $data->birthday; 
        $user->save();
        
        $userID = DB::getPdo()->lastInsertId();

        $shipping = new Shipping;
        $shipping->user_id = $userID; 
        $shipping->address = $data->address;
        $shipping->city = $data->city;
        $shipping->state = $data->state;
        $shipping->zip = $data->zip;

        return ($user);
    }
}
