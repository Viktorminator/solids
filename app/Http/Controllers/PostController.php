<?php

namespace App\Http\Controllers;

use App\Posts;
use Redirect;
use App\Http\Requests\PostFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Helpers;

class PostController extends BaseController
{

    public function aliasToView($alias) {
        // get Post all fields (content, pagetitle, etc...)
        $post = Posts::whereAlias($alias)->first();
        $template_id = $post->template_id;
        $post_id = $post->id;
        $year = date("Y", strtotime($post->published));
        // get sidebar list for category
        $list = Posts::whereParent($post_id)->get();
        // get parent alias
        $parent_id = Posts::whereAlias($alias)->first(['parent']);
        $parent_alias = Posts::whereId($parent_id->parent)->first(['alias']);
        // get sidebar list for subcategory
        $sublist = Posts::whereParent($parent_id->parent)->get();
        $parent = Posts::whereId($parent_id->parent)->first();
        // get articles list for articles page
        $posts = Posts::whereParent($post_id)->orderBy('published', 'desc')->paginate(8);

        // get years of Posts for making sidebar pagination by Year
        $years = DB::table('posts')->select(DB::raw('YEAR(published) as Year'))->orderBy('Year', 'desc')->groupBy('Year')->get();
        // get Authors name of post
        $author_name = $post->author->author_name;
        switch($template_id) {
            case 'articles':
                $output = view($template_id)->with(compact('post','list','pnav','snav','posts'));
                break;
            case 'news':
                $year = '';
                $output = view($template_id)->with(compact('post','list','pnav','snav','posts','year','years'));
                break;
            case 'news-article':
                $output = view($template_id)->with(compact('post', 'list', 'pnav','snav','year', 'years'));
                break;
            case 'faq-article':
                $output = view($template_id)->with(compact('post','pnav','snav', 'parent', 'author_name'));
                break;
            case 'faq-subcategory':
                $sublist = Posts::where('template_id','faq-subcategory')->get();
                $output = view($template_id)->with(compact('post','sublist','posts'));
                break;
            case 'faq':
                $sublist = Posts::where('template_id','faq-subcategory')->get();
                $posts = Posts::whereIn('parent', [165,166,167])->orderBy('published', 'desc')->paginate(8);
                $output = view($template_id)->with(compact('post','sublist','posts'));
                break;
            default:
                $output = view($template_id)->with(compact('post','list','sublist','parent_alias','pnav','snav','parent'));
                break;
        }
        // send to view all the data
        return $output;
    }

    public function archive($year) {
        // get archive page for specific year
        $parent_alias = 'novosti.html';
        // get parent object field for displaying for all the posts (title, desc, etc ... )
        $post = Posts::whereAlias($parent_alias)->first();
        $template_id = 'news';
        // get years of Posts for making sidebar pagination by Year
        $years = DB::table('posts')->select(DB::raw('YEAR(published) as Year'))->orderBy('Year', 'desc')->groupBy('Year')->get();
        $posts = DB::table('posts')->whereYear('published',$year)->get();

        return view($template_id)->with(compact('post','list','pnav','snav','posts','year','years'));
    }


    public function index() {
        $post = Posts::whereAlias('index.html')->first();
        // get last article, news and question
        $last_article = Posts::whereTemplateId('article')->orderBy('published', 'desc')->first();
        $author_name = $last_article->author->author_name;
        $last_news = Posts::whereTemplateId('news-article')->orderBy('published', 'desc')->first();
        $last_question = Posts::whereTemplateId('faq-article')->orderBy('published', 'desc')->first();
        return view('index')->with(compact('post', 'last_article','last_news', 'last_question','author_name'));
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

    public function sendmail($request) {
        \Mail::send('emails.contact',
            array(
                'name' => $request->get('form-person'),
                'phone' => $request->get('form-phone'),
                'email' => $request->get('form-email'),
                'organization' => $request->get('form-company'),
                'user_message' => $request->get('form-question')
            ), function($message)
            {
                $message->from('info@solids.dev');
                $message->to('viktorminator@gmail.com', 'Admin')->subject('Письмо с Солидс');
            });

        return \Redirect::route('contact')->with('message', 'Спасибо за Ваше сообщение! Скоро с Вами свяжется менеджер компании');
    }
    // Call me back! request
    public function callme() {
        $post = Posts::whereAlias('index.html')->first();
        return view('callme')->with(['post' => $post ]);
    }
    public function hello()
    {
        return view('helloworld', array(
            'page_title' => Helpers::hello_world(' Default name')
        ));
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
