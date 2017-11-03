<?php

namespace App\Http\Controllers;

use App\DashboardValues; 
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    


	public function index()
    {
    	return view('dashboard.index'); 
    }





    public function stats()
    {
    	$values = DashboardValues::find(
    		rand(1, DashboardValues::count())
    	); 

    	// dd($values); 

    	return response()->json([
    		"data" => [
    			'user' => $values->user_count, 
    			'visits' => $values->visits_count, 
    			'clicks' => $values->clicks_count, 
    			'items' => $values->items_count
    		], 
    	], 200); 
    }





    public function getPollingOptions()
    {
    	return response()->json([
    		"data" => [
    			'max_attempts' => env('POLLING_MAX_ATTEMPTS', 4), 
	    		'poll_timer' => env('POLLING_TIMER', 6500),  
    		]
    	], 200); 
    }



}
