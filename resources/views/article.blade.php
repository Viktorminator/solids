@extends('layout')
@section('content')
    <h1 class="big">{{ $parent->pagetitle }}</h1>
    <h1>{{ $post->pagetitle }}</h1>
    <p class="desc">{{ Helpers::getRusDate($post->published) }} , {{ $post->author->author_name }}</p>
    {!!  $post->content !!}
@stop