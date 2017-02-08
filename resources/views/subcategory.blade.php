@extends('layout')
@section('content')
    <h1 class="big">{{ $parent->pagetitle }}</h1>
    <ul class="navigation-side">
        @foreach($sublist as $item)
            @if($item->alias == $post->alias)
                <li class="selected"><strong>{{ $item->menutitle }}</strong><div class="angle"></div></li>
            @else
                <li><a href="{{ $item->alias }}" title="{{ $item->title }}">{{ $item->menutitle }}</a></li>
            @endif
        @endforeach
    </ul>
    {!!  $post->content !!}
@stop