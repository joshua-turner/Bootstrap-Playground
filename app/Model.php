<?php 

namespace App; 

use Illuminate\Database\Eloquent\Model as Eloquent;


class Model extends Eloquent
{

	protected $guarded = ['id']; 



	public function user()
	{
		return $this->belongsTo(User::class, 'user_id');
	}

}