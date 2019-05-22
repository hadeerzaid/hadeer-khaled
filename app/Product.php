<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //


	public function getfeaturedattribute($featured)
        	{
        		return asset($featured);
        	}

    
       protected $fillable = ['title','description','category_id','featured','slug'];

       public function category()
    {

    	return $this->belongsTo('App\Category');
    }

}
