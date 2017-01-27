@extends('layout')
@section('content')
        <h1 class="big">{{ $post->pagetitle }}</h1>
        <ul class="navigation-side">
            @foreach($list as $item)
                @if(Request::segment(1) == $item->alias)
                    <li class="selected"><strong>{{ $item->pagetitle }}</strong><div class="angle"></div></li>
                @else
                    <li><a href="{{ $item->alias }}" title="{{ $item->title }}">{{ $item->pagetitle }}</a></li>
                @endif
            @endforeach
        </ul>
        {!!  $post->content !!}
@stop