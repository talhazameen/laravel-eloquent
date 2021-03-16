<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $guarded = [];
    public function comments() 
    {
    	return $this->hasnMany(Comment::class);
    }

    public function tags() 
    {
    	return $this->belongsToMany(Tag::class)->withTimestamps();	
    }
}
