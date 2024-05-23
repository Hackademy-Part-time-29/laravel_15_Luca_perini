<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|max:50',
            'body'=>'required|max:100',
            'cover'=>'mimes:jpg,bmp,png',
		    'categories'=>'required|array',
		    'categories.*'=>'exists:categories,id'
        ];
    }
    public function messages(){
        return
        [
            'title.required' =>'Title is Rerquired.',
            'body.required' =>'Description is Rerquired.',
            'cover.mimes'=>'Insert a correct file(jpg, bmp o png).'
        ];
    }
}
