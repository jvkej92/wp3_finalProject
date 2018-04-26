<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DashboardMetricController extends Controller
{
    public function newUsers(){
        return DB::table('users')->count();
    }
}
