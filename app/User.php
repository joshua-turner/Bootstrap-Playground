<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];




    public static function records($request = null)
    {
        $request = $request ?: request(); 

        $instance = new static; 


        if(!is_null($request->q)) 
        {
            $searchTerm = $request->q; 
            $instance = $instance->where("email",'like',"%$searchTerm%")
            ->orWhere('first_name','like',"%$searchTerm%")
            ->orWhere('last_name','like',"%$searchTerm%"); 
        }


        // add any filters 
        if($request->orderFrom == "users") 
        {
           $instance = $instance->orderBy($request->orderBy, $request->orderType); 
        }

        $instance =  $instance->with(['profile' => function($query) use ($request){

            if($request->orderFrom == "profile") 
            {
                // dd("here"); 
                $query->orderBy($request->orderBy, $request->orderType); 
            }

        }]); 

        if(!$request->orderFrom) 
            $instance = $instance->orderBy('first_name','asc'); 

        return $instance; 

    }





    public function profile()
    {
        return $this->hasOne(UserProfile::class, 'user_id'); 
    }


}
