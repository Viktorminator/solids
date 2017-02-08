@extends('layout')
@section('content')
        @if(is_null($post->parent))
            <h1 class="big">{{ $post->pagetitle }}</h1>
        @else
            <h1 class="big">О компании</h1>
            <h1>{{ $post->pagetitle }}</h1>
        @endif

        <ul class="navigation-side">
            @foreach($list as $item)
                @if(Request::segment(1) == $item->alias)
                    <li class="selected"><strong>{{ $item->title }}</strong><div class="angle"></div></li>
                @else
                    <li><a href="{{ $item->alias }}" title="{{ $item->title }}">{{ $item->title }}</a></li>
                @endif
            @endforeach
        </ul>
        {!!  $post->content !!}
@stop