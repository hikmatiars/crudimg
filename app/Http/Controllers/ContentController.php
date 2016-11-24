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

   
    public function index()
    {
        
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
   
    public static function store(ContentRequest $request)
    {

        if ($request::ajax()){
            $method = $request->method();
        $image = Image::make($request->file('img'));
        $image_name = Input::file('img')->getClientOriginalName();
        $title = $request->img_name;
        $thumb_size = 'thumb_'.$request->img_name;
        $inputContent = $request->content;
        Content::save_image($image, $image_name, $title, $thumb_size, $inputContent, $method);
        return redirect()->route('post');
        }
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $content = Content::find($request->id);
        return response()->json($content);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $content = Content::find($id);
      
        return response()->json($content);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $method = $request->method();
        $image = Image::make($request->file('img'));
        $image_name = Input::file('img')->getClientOriginalName();
        $title = $request->img_name;
        $thumb_size = 'thumb_'.$request->img_name;
        $inputContent = $request->content;
        Content::save_image($image, $image_name, $title, $thumb_size, $inputContent, $method);
        return redirect()->route('post');
        return response()->json($content);
    }
       
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
         $content = Content::find($request->id);
         $content->delete();
         $directory = public_path().'/uploads/'.$content->id; 
         File::deleteDirectory($directory);
         return response()->json($content);

    }
}
