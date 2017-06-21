@extends('layout')

@section('content')
    {!! $post->content !!}
    <hr />
    <div class="columns-3">
        <div class="col-1">
            <h2>Статьи и обзоры</h2>
            <p><a href="{{ $last_article->alias }}">{{ $last_article->title }}</a></p>
            <p class="desc">{{ Helpers::getRusDate($post->published, 'd m Y') }}, {{ $author_name }}</p>
            <p class="mini">{{ $last_article->description }}</p>
        </div>
        <div class="col-2">
            <h2>Новости и события</h2>
            <p><a href="{{ $last_news->alias }}">{{ $last_news->title }}</a></p>
            <p class="desc">{{ Helpers::getRusDate($post->published, 'd m') }}</p>
            <p class="mini">{{ $last_news->description }}</p>
        </div>
        <div class="col-3">
            <h2>Ответы на вопросы</h2>
            <p><a href="{{ $last_question->alias }}">{{ $last_question->title }}</a></p>
            <p class="desc">{{ $author_name }}</p>
        </div>
    </div>
@stop