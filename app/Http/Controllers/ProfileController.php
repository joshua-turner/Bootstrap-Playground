<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{


	public function index()
	{
		return view('user.index'); 
	}


    

	public function show($profile = null)
	{
		// $profile = $profile ?: auth()->user()

		return view('user.profile'); 

	}


}
