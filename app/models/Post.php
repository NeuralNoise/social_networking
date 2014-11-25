<?php

class Post extends \Eloquent {
	protected $fillable = [];

	function user()
	{
		return $this->belongsTo('User', 'user_id');
	}
}