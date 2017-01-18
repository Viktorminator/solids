<?php

namespace App\Http\Controllers;

use App\Posts;
use App\User;
use Redirect;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about-company');
    }

    public function articles() {
        return view('articles');
    }

    public function news() {
        return view('news');
    }

    public function faq() {
        return view('faq');
    }

    public function create(Request $request)
    {
        if($request->user()->can_post())
        {
            return view('backend.create');
        }
        else
        {
            return redirect('/')->withErrors('Нет прав для написания');
        }
    }

    public function store(PostFormRequest $request)
    {
        $post = new Posts();
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->slug = str_slug($post->title);
        $post->author_id = $request->user()->id;
        if($request->has('save'))
        {
            $post->active = 0;
            $message = 'Пост успешно сохранен';
        }
        else
        {
            $post->active = 1;
            $message = 'Пост опубликован успешно';
        }
        $post->save();
        return redirect('edit/'.$post->slug)->withMessage($message);
    }

    public function show($slug)
    {
        $post = Posts::where('slug',$slug)->first();
        if(!$post)
        {
            return redirect('/')->withErrors('Запрошенная страница не найдена');
        }
        $comments = $posts->comments;
        return view('backend.show')->withPost($post)->withComments($comments);
    }

}
