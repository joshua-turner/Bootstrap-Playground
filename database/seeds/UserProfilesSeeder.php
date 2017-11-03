<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function(){
        	factory(App\User::class, 50)
        	->create()
        	->map(function($user){
        		factory(App\UserProfile::class)->create([
        			'user_id' => $user->id
        		]); 
        	}); 
        }); 
    }
}
