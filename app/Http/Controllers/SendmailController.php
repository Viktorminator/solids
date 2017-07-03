<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail as MailSender;
use App\Mail\Reminder;
use Illuminate\Support\Facades\URL;

class SendmailController extends Controller
{

    //
    public function index() {

        $messages = [
            'person.required' => 'Укажите Ваше имя!',
            'question.required' => 'Опишите Вашу проблему!' ,
            'phone.required' => 'Укажите Ваш телефон!' ];

        $input = request()->only('person', 'phone','email', 'company', 'question');

        $rules = [
            'person' => 'required',
            'phone' => 'required',
            'question' => 'required'
        ];

        $validation = validator($input, $rules, $messages);

        if ($validation->passes()) {
            MailSender::to('sales@solids.ru')->send(new \App\Mail\Contact(request()));
            $post = new \App\Posts();
            $post->description = 'blabla';
            $post->keywords = 'blabla';
            return redirect()->route('contact.success');
        }

        return redirect(URL::previous() . "#messages")->withErrors($validation->errors());

    }
}
