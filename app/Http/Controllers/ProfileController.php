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
		$profile = $profile ?: $this->getRandomuser(); 

		// dd($profile); 

		return view('user.profile', compact('profile')); 

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
		return User::records()->paginate(10); 
	}





	public function getRandomuser()
	{
		return User::id(
			rand(1, User::count())
		)->with('profile')
		->first(); 
	}


}
