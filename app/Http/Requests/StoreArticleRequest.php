<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'title' => 'required|max:255|unique:articles',
            'image' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'body' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'preenchimento obrigatório',
            'title.max' => 'máximo: 255 caracteres',
            'title.unique' => 'este título já existe',
            'image.required' => 'preenchimento obrigatório',
            'image.mimes' => 'formatos validos: jpeg, jpg, png',
            'image.max' => 'tamaho máximo permitido: 2MB',
            'image.max' => 'máximo: 3000mx',
            'body.required' => 'preenchimento obrigatório',
        ];
    }
}