<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'img_name'      =>'required',
            'thumb_size'    =>'required',
            'img'           =>'required|mimes:jpeg,bmp,png',
            'content'       =>'required|max:50'
        ];
    }

    public function messages(){
        return [
            'img_name.required'     => 'Image name dont blank',
            'thumb_size.required'   => '',
            'img.required'          => 'Image dont blank',
            'img.mimes'             => 'file must .jpeg .bmp or .png format',
            'content.required'      => 'content dont blank',
            'content.max'           =>  'content max>50'
        ];
    }
}
