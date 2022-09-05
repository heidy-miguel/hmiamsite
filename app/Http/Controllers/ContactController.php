<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ContactController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $rules = [
            'name' => 'required|min:4|max: 50',
            'subject' => 'required|max:150',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ];

        $message = [
            'name.required' => 'preenchimento obrigatório',
            'name.min' => 'minimo: 4 caracteres',
            'name.max' => 'máximo: 50 caracteres',
            'subject.required' => 'preenchimento obrigatório',
            'subject.max' => 'máximo: 150 caracteres',
            'email.required' => 'preenchimento obrigatório',
            'email.email' => 'insere um email valido',
            'message.required' => 'preenchimento obrigatório',
            'message.min' => 'minimo: 10 caracteres',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails())
        {
            return Redirect::to(Url::previous() . '#contact')->withErrors($validator);
        }

        \Mail::raw($request->get('message'), function($message) use ($request){
            $message->from($request->get('email'));
            $message->subject($request->get('subject'));
            $message->to('info@hmiam.gov.ao');
        });


        // Contact::create($validated);
        $request->session()->flash('message', 'Email enviado com sucesso!');
        return Redirect::to(Url::previous() . '#contact');
    }

}