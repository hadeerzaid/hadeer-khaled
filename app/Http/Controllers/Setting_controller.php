<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class Setting_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $setting = Setting::first();
        return view('admin.setting.setting')->with('setting',$setting);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
        
       $this->validate(request(),[

        'site_name'=>'required',
        'contact_email'=>'required',
        'contact_number'=>'required',
        'address'=>'required',
       ]);

       $setting = Setting::first();

       $setting->site_name = request()->site_name;
       $setting->contact_number = request()->contact_number;
       $setting->contact_email = request()->contact_email;
       $setting->address = request()->address;
       $setting->save();
       return redirect()->back();
       

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
}
