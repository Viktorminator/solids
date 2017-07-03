<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Mail as MailSender;
use App\Mail\Contact as MailContact;
use App\Mail\Reminder;

class SendmailController extends Controller
{

    //
    public function index() {

        $messages = [
            'person.required' => 'Укажите Ваше имя!',
            'question.required' => 'Опишите Вашу проблему!' ,
            'email.required' => 'Укажите Ваш e-mail адрес!' ];

        $input = request()->only('person', 'phone','email', 'company', 'question');

        $rules = [
            'person' => 'required',
            'email' => 'required|email',
            'question' => 'required'
        ];

        $validation = validator($input, $rules, $messages);

        if ($validation->passes()) {
            MailSender::to('viktorminator@gmail.com')->send(new MailContact(request()));
            $post = new \App\Posts();
            $post->description = 'blabla';
            $post->keywords = 'blabla';
            return redirect()->route('contact.success');
        }

        return redirect(URL::previous() . "#messages")->withErrors($validation->errors());

    }

    public function test()
    {
        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('emails.contact', [], function($message)
        {
            $message
                ->from('bar@example.com')
                ->to('foo@example.com', 'John Smith')
                ->subject('Welcome!');
        });

    }

}
