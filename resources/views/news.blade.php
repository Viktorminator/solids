@extends('layout')
@section('content')
<h1 class="big">Новости и события</h1>
@if(!empty($year))
    <h1>{{ $year }} год</h1>
@endif
<ul class="navigation-side">
    @foreach($years as $item)
        @if($item->Year == $year)
            <li class="selected"><strong>{{ $item->Year }}</strong><div class="angle"></div></li>
        @else
            <li><a href="{{ $item->Year }}/">{{ $item->Year }}</a></li>
        @endif
    @endforeach
</ul>
    @foreach($posts as $item)
        <h3><a href="{{ $item->alias }}" title="{{ $item->title }}">{{ $item->pagetitle }}</a></h3>
        <p class="desc"> {{ Helpers::getRusDate($item->published, 'd m') }} </p>
        <p class="mini">{{ $item->description }}</p>
    @endforeach
@stop