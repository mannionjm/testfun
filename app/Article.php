<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function scopeTrending($query, $take = 3)
    {
    	//This will allow us to easily resuse a query in a model.
    	return $query->orderBy('reads', 'desc')->take($take)->get();
    }
}
