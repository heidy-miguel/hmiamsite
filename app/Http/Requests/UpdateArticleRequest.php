<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
{


    public function authorize()
    {
        return \Auth::check();
    }


    public function rules()
    {
        return [
            //
            'title' => 'required|max:255',
            'image' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'body' => 'required',
            'active' => 'nullable',
        ];
    }

    public function messages() 
    {
        return [
            'title.required' => 'preenchimento obrigatório',
            'title.max' => 'máximo: 255 caracteres',
            //'title.unique' => 'este título já existe',
            'image.required' => 'preenchimento obrigatório',
            'image.mimes' => 'formatos validos: jpeg, jpg, png',
            'image.max' => 'tamanho máximo permitido: 2MB',
            'body.required' => 'preenchimento obrigatório',
            //'active.required' => 'preenchimento obrigatório',
        ];
    }
}