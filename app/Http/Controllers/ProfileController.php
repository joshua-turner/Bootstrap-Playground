<?php

namespace App\Http\Controllers;

use App\User; 
use Illuminate\Http\Request;

class ProfileController extends Controller
{


	public function primaryIndex()
	{
		return view('user.primaryIndex'); 
	}




	public function index()
	{
		return view('user.index'); 
	}


    

	public function show($profile = null)
	{
		// $profile = $profile ?: auth()->user()

		return view('user.profile'); 

	}



	public function getRecords()
	{
		$users = $this->getUsers(); 

		return response()->json([
			'data' => $users,
		], 200); 
	}




	public function getUsers()
	{
		return User::records()->paginate(25); 
	}



}
