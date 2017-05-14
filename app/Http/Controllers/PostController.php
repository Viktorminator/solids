<?php

namespace App\Http\Controllers;

use App\Posts;
use Redirect;
use App\Http\Requests\PostFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends BaseController
{
    public function aliasToView($alias) {
        // get Post all fields (content, pagetitle, etc...)
        $post = Posts::whereAlias($alias)->first();
        $template_id = $post->template_id;
        $post_id = $post->id;
        // get sidebar list for category
        $list = Posts::whereParent($post_id)->get();
        // get parent alias
        $parent_id = Posts::whereAlias($alias)->first(['parent']);
        $parent_alias = Posts::whereId($parent_id->parent)->first(['alias']);
        // get sidebar list for subcategory
        $sublist = Posts::whereParent($parent_id->parent)->get();
        $parent = Posts::whereId($parent_id->parent)->first();
        // get articles list for articles page
        $posts = Posts::whereParent($post_id)->paginate(8);

        // get years of Posts for making sidebar pagination by Year
        $years = DB::table('posts')->select(DB::raw('YEAR(published) as Year'))->orderBy('Year', 'desc')->groupBy('Year')->get();

        switch($template_id) {
            case 'articles':
                $output = view($template_id)->with(compact('post','list','pnav','snav','posts'));
                break;
            case 'news':
                $year = '';
                $output = view($template_id)->with(compact('post','list','pnav','snav','posts','year','years'));
                break;
            case 'news-article':
                $year = '';
                $output = view($template_id)->with(compact('post', 'list', 'pnav','snav','posts','year', 'years'));
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
        $years = DB::table('posts')->select(DB::raw('YEAR(published) as Year'))->groupBy('Year')->get();
        $posts = DB::table('posts')->whereYear('published',$year)->get();

        return view($template_id)->with(compact('post','list','pnav','snav','posts','year','years'));
    }


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
