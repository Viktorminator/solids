@extends('layout')
@section('content')
    <div class="content">
        <h1 class="big">Результаты поиска</h1>
        @foreach($results as $result)
            <h3><a href="{{ $result->link }}">{{ $result->title }}</a></h3>
            <p>{!! $result->snippet !!}</p>
            <p class="desc">{{ $result->formattedUrl }}</p>
        @endforeach
    </div>
@stop