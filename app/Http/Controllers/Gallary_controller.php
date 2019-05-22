<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallary;

class Gallary_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $gallary = Gallary::all();
        return view('admin.gallary.index')->with('gallary',$gallary);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.gallary.create');
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
            'featured'=>'required|image',
        ]);

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/gallary/',$featured_new_name);

        $gallary = Gallary::create([
            'featured'=>'uploads/gallary/'.$featured_new_name,
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
          $gallary = Gallary::find($id);
        return view('admin.gallary.edit')->with('gallary',$gallary);
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

        $gallary = Gallary::find($id);

        if($request->hasFile('featured'))
        {
            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/gallary/',$featured_new_name);
            $gallary->featured = 'uploads/gallary/'.$featured_new_name;
        }

       
        $gallary->save();
        return redirect()->route('gallaries');
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
        $gallary = Gallary::find($id);
        $gallary->delete();
        return redirect()->back();
    }
}
