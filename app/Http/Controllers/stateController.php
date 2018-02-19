<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class stateController extends Controller
{
    function states(){
        $states = DB::table('states')->distinct()->select('state', 'abrv')->get();
        return $states;
    }

    function stateByZip($zip){
        $state = DB::table('states')->where('zip', $zip)->take(1)->get();
        return $state;
    }
}
