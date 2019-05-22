<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //

		public function getfeaturedattribute($featured)
        	{
        		return asset($featured);
        	}
    
    protected $fillable = ['name','about','featured'];
}
