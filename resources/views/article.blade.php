@extends('layout')
@section('content')
    <h1 class="big">{{ $parent->pagetitle }}</h1>
    <h1>{{ $post->pagetitle }}</h1>
    <p class="desc">{{ \Carbon\Carbon::createFromFormat('U', $post->published)->formatLocalized('%d %B %Y') }} , {{ $post->author->author_name }}</p>
    {!!  $post->content !!}
@stop