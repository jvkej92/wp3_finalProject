<?php

namespace App\Http\Controllers;

use App\User;
use App\Wines;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardMetricController extends Controller
{
    public function totalUsers($loopCount){
        $response =  array();
        $beforeDate = Carbon::today()->subMonth(); 
        for($index = 0; $index < $loopCount; $index++){
            array_push($response, User::where('created_at', '>=', $beforeDate)->count());
            $beforeDate->subMonth($index);
        }
        return ($response);
    }
    
    public function newUsers($loopCount){
        $response =  array();
        for($index = 0; $index < $loopCount; $index++){
            $beforeDate = Carbon::today()->subMonth();
            $afterDate = Carbon::today()->subMonth($index - 1);
            array_push($response, User::whereBetween('created_at', [$beforeDate, $afterDate])->count());
        }
        return array_reverse($response);
    }
}
