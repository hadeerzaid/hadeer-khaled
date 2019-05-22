<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class Author_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $author = Author::all();
            return view('admin.author.index')->with('author',$author);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.author.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datavalidate = $request->validate([

            'name'=>'required',
            'featured'=>'required|image',
            'about'=>'required',
           
            

        ]);

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/author/',$featured_new_name);

        $author = Author::create([
            'name'=>$request->name,
            'about'=>$request->about,
            'featured'=>'uploads/author/'.$featured_new_name,
        ]);


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $author = Author::find($id);
        return view('admin.author.edit')->with('author',$author);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
            $validatedata = $request->validate([
            'name'=>'required',
            'about'=>'required',

        ]);

        $author = Author::find($id);

        if($request->hasFile('featured'))
        {
            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/author/',$featured_new_name);
            $post->featured = 'uploads/author/'.$featured_new_name;
        }

        $author->name = $request->name;
        $author->about = $request->about;
        $author->save();
        return redirect()->route('author.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $author = Author::find($id);
        $author->delete();
        return redirect()->back();
    }
}
