<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    


	public function index()
    {
    	// dd("here"); 
    	return view('dashboard.index'); 
    }





    public function stats()
    {
    	return response()->json([
    		"data" => [
    			'user' => rand(600, 90000), 
    			'visits' => rand(600, 90000), 
    			'clicks' => rand(600, 90000), 
    			'items' => rand(600, 90000)
    		], 
    	], 200); 
    }

}
