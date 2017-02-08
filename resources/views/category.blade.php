@extends('layout')
@section('content')
    <h1 class="big">{{ $post->pagetitle }}</h1>
    <ul class="navigation-side">
        @foreach($list as $item)
            <li><a href="{{ $item->alias }}" title="{{ $item->title }}">{{ $item->menutitle }}</a></li>
        @endforeach
    </ul>
    {!!  $post->content !!}
@stop