<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

	public $timestamps = true;
	// protected $fillable = ['cat_name','cat_url','cat_des'];
}
