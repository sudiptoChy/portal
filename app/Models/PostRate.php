<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostRate extends Model
{
    protected $table = 'post_rating';

    public function post()
    {
    	return $this->belongsTo('App\Models\Post');
    }

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}