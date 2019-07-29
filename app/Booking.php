<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
	public function user($value='')
	{
		return $this->belongsTo('\App\User');
	}

	public function package($value='')
	{
		return $this->belongsTo('\App\Package');
	}
}
