<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Author;
use App\Setting;
use App\Category;
use App\Gallary;

class frontend_controller extends Controller
{
    //


      public function index()
    {
        $gallary = Gallary::all();
    	$setting = Setting::first();
    	return view('index')->with('first_product',Product::orderBy('created_at','desc')->first())
    	->with('second_product',Product::orderBy('created_at','desc')->skip(1)->take(1)->first())
    	->with('third_product',Product::orderBy('created_at','desc')->skip(2)->take(1)->first())
    	->with('fourth_product',Product::orderBy('created_at','desc')->skip(3)->take(1)->first())
    	->with('fifth_product',Product::orderBy('created_at','desc')->skip(4)->take(1)->first())
    	->with('author1',Author::find(1))
    	->with('author2',Author::find(2))
    	->with('author3',Author::find(3))
        ->with('author4',Author::find(4))
        ->with('author5',Author::find(5))
    	->with('setting',$setting)
        ->with('books',Product::all())
        ->with('gallary',$gallary);	
    }

    public function product()
    {
        $product = Product::paginate(1);
        $setting = Setting::first();

    	return view('books')->with('product',$product)
                ->with('setting',$setting); 

    }
}










