<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class SendmailController extends Controller
{

    //
    public function index() {

        $messages = [
            'form-person.required' => 'Укажите Ваше имя!',
            'form-question.required' => 'Опишите Вашу проблему!' ,
            'form-email.required' => 'Укажите Ваш e-mail адрес!' ];

        $input = request()->only('form-person', 'form-phone','form-email', 'form-company', 'form-question');

        $rules = [
            'form-person' => 'required',
            'form-email' => 'required|email',
            'form-question' => 'required'
        ];

        $validation = validator($input, $rules, $messages);

        if ($validation->passes()) {
            Mail::to('viktorminator@gmail.com')->send(new App\Mail\Contact(request()));

            return redirect()->route('contact.success');
        }

        return redirect(URL::previous() . "#messages")->withErrors($validation->errors());
    }
}
