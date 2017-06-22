@extends('layout')
@section('content')
        <h1 class="big">Ответы на вопросы</h1>
        <h1>{{ $post->pagetitle }}</h1>
        <ul class="navigation-side">
            @foreach($sublist as $item)
                @if($item->alias == $post->alias)
                    <li class="selected"><strong>{{ $item->title }}</strong><div class="angle"></div></li>
                @else
                    <li><a href="{{ $item->alias }}" title="{{ $item->title }}">{{ $item->title }}</a></li>
                @endif
            @endforeach
        </ul>
        @foreach($posts as $item)
            <h3><a href="{{ $item->alias }}" title="{{ $item->title }}">{{ $item->pagetitle }}</a></h3>
            <p class="desc">{{ $item->author->author_name }}</p>
        @endforeach

        {{ $posts->links() }}

@stop