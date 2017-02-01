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
    public function aliasToView($alias) {
        $post = Posts::whereAlias($alias)->first(['template_id']);
        $template_id = $post->template_id;

        // get Post all fields (content, pagetitle, etc...)
        $post = Posts::whereAlias($alias)->first();
        // get sidebar list
        $list = Posts::whereParent('71')->get();
        // get secondary nav list with row sort
        $snav = Posts::whereIn('id', [71,122,69,27])->orderByRaw('FIELD(id,71,122,69,27)')->get();
        // get parent alias
        $parent = Posts::whereAlias($alias)->first(['parent']);
        $parent_alias = Posts::whereId($parent->parent)->first(['alias']);
        // send to view all the data
        return view($template_id)->with(compact('post','list','parent_alias','snav'));
    }
    //
    public function index() {
        $post = Posts::whereAlias('index.html')->first();
        return view('index')->with('post', $post);
        //return view('index');
    }

    /* 'dostizheniya.html', 'komanda.html', 'kontaktyi.html', 'rekvizityi.html','smi-o-nas.html'*/
    public function about() {
        $post = Posts::whereAlias('o-kompanii.html')->first();
        $list = Posts::whereParent('71')->get();
        return view('about-company')->with(compact('post','list'));
    }

    public function aboutpages($alias) {
        $post = Posts::whereAlias($alias)->first();
        $list = Posts::whereParent('71')->get();
        return view('about-company')->with(compact('post','list'));
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
