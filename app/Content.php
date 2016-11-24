<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
class Content extends Model
{
  	public static function save_image($image, $image_name, $title, $thumb_size, $inputContent, $method, $id=''){
        if ($method === 'POST'){
            $content = new Content();
        }else if($method === 'PUT') {
           $content = Content::find($id);
        }
  		  $content->img_name = $title;
        $content->thumb_size = $thumb_size;
        $content->img = $image_name;
        $content->content = $inputContent;
        $content->save();
        $directory = public_path().'/uploads/'.$content->id; 	
  		 if (!File::exists($directory)){
         File::makeDirectory($directory, $mode=0777,true,true);
         $image->resize(400,200)->save($directory.'/'.$image_name);
         $image->resize(200,100)->save($directory.'/'.'thumb_'.$image_name);
         }
  	}
}
