<?php
namespace App\Http\Controllers;

use App\User;

class MailchimpController extends Controller
{
    public $mailchimp;
    public $listId = 'd4c27757b9';

    public function __construct(\Mailchimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }

    //Subscribes user to mailchimp list
    public function subscribe()
    {
        $user = User::latest()->first();
        $name =  explode(' ', $user->name);
        //Subscribes the user
        try {
            $this->mailchimp->lists->subscribe(
                $this->listId,
                [
                    'first_name' => $name[0],
                    'last_name' => $name[1],
                    'email' => $user->name,
                    'birthday' => $user->birthday
                ]
            );
        }
        catch (\Mailchimp_List_AlreadySubscribed $e) {
            return 'Email is Already Subscribed';
        } 
        catch (\Mailchimp_Error $e) {
            return 'Error from MailChimp';
        }

        return ('/plans');
    }
}
