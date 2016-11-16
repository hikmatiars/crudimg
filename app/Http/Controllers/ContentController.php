<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContentRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
//use Image;
use App\Content;



class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $images_name;
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
   
    public function store(ContentRequest $request)
    {
        $content = new Content();
         
        $file = Input::file('img');
        $image = Image::make($request->file('img'));
        $image_name = $file->getClientOriginalName();

        $content->img_name = $request->img_name;
        $content->thumb_size = 'dsad';
        $content->img = $image_name;
        $content->content = $request->content;
        $content->save();

        //creating thumbnail 

        $directory = public_path().'/uploads/'.$content->id;   
        if (!File::exists($directory)){
         File::makeDirectory($directory, $mode=0777,true,true);
         $image->save($directory.'/'.$image_name);
         $image->resize(200,100)->save($directory.'/'.'thumb_'.$image_name);
         return redirect()->route('post');
       }

        
        
    }

    public function detail(Request $request){
       $image = Content::find($request->id);
       $debug = dd($image);
       echo json_encode($debug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $image = Content::find($request->id);
        return response()->json($image);
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
