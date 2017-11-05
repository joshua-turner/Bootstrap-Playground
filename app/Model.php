<?php 

namespace App; 

use Illuminate\Database\Eloquent\Model as Eloquent;


class Model extends Eloquent
{

	protected $guarded = ['id']; 



	public static function scopeId($query, $id)
	{
		return $query->where('id', $id); 
	}




	public function user()
	{
		return $this->belongsTo(User::class, 'user_id');
	}

}