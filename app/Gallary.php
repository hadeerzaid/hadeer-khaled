<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallary extends Model
{
    //


		public function getfeaturedattribute($featured)
        	{
        		return asset($featured);
        	}
    
    protected $fillable = ['featured'];
}
