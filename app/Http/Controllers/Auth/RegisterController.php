<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Newsletter;
use App\User;
use App\Address;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/subscribe/plans';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {

        //Get current date - 21 years
        $current = Carbon::today();
        $validDate = $current->subYears(21);
        
        return Validator::make($data, [
            'name' => 'required|string|min:8',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'birthday' => 'required|date|before:' . $validDate. '',
            'address' => 'required|string|max:255',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    public function create(array $data)
    {
        //Creates a user
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'birthday' => $data['birthday']
        ]);

        $name = explode(' ', $data['name']);
        $firstName = $name[0];
        $lastName = $name[1];

        $dob = explode('-', $data['birthday']);
        $birthday = $dob[1] . '/' . $dob[2];
        
        //Give user permissions based on status
        RegisterController::registerAddress($data);
        Newsletter::subscribe($data['email'], [
            'FNAME'=>$firstName, 
            'LNAME'=>$lastName, 
            'BIRTHDAY'=>$birthday
        ]);

        return ($user);
    }

   public function registerAddress(array $data){
        //Get the current user
        $currentUser = User::latest('id')->first();
        
        //Create an entry in the Billing table
        Address::create([
            'user_id' => $currentUser['id'],
            'address' => $data['address'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip' => $data['zip'],
            'address_type' => 'shipping',
        ]);
    }


}
