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
            'picture' => 'required|file|mimes:jpg,jpeg,png|max:3072',
            'body' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'preenchimento obrigatório',
            'title.max' => 'tamanho máximo: 255 caracteres',
            'title.unique' => 'este título já existe',
            'picture.required' => 'preenchimento obrigatório',
            'picture.mimes' => 'formatos validos: jpeg, jpg, png',
            'picture.max' => 'tamanho máximo permitido: 3MB',
            'body.required' => 'preenchimento obrigatório',
        ];
    }
}