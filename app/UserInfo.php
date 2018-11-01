<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = ['user_id','phone','district'];

	public function user()
	{
		return $this->belongsTo('User');
	}
}
