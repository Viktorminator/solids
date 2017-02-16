@extends('layout')
@section('content')
    <h1 class="big">{{ $parent->pagetitle }}</h1>
    <h1>{{ $post->pagetitle }}</h1>
    {!!  $post->content !!}
@stop