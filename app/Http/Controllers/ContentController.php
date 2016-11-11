<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Content;
use App\file;
use App\Http\Requests;
//use Illuminate\Support\Facades\Input;


class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$content = Content::all();
        //return view('');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $content = new Content();
          //$directory = public_path().'/uploads';         
        //if(Input::hasFile('img')){
            $file = Input::file('img');
            $images_name = $file->getClientOriginalName();
            $file->move(public_path('uploads/'),$images_name);
        //}

        $content->img_name = $request->img_name;
        $content->thumb_size = 'dsad';
        $content->img = $images_name;
        $content->content = $request->content;
        $content->save();
        /*
        $content->img_name = $request->img_name;
        $content->thumb_size = $request->thumb_size;
        $content->img = $request->img;
        $content->content = $request->content;
        $content->save();
        return redirect()->route('dashboard');  */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
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
    public function update(Request $request, $id)
    {
        //
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
    }
}
