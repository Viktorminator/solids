@extends('layout')
@section('content')
<h1 class="big">Новости и события</h1>
<ul class="navigation-side">
    @foreach($years as $year)
        <li><a href="{{ $year->Year }}/">{{ $year->Year }}</a></li>
    @endforeach
</ul>
    @foreach($posts as $item)
        <h3><a href="{{ $item->alias }}" title="{{ $item->title }}">{{ $item->pagetitle }}</a></h3>
        <p class="desc"> {{ Carbon\Carbon::parse($item->published)->formatLocalized('%d %B') }} </p>
        <p class="mini">{{ $item->description }}</p>
    @endforeach
@stop