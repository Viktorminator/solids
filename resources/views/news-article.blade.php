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

    <h1>{{ $post->pagetitle }}</h1>
    <p class="desc">{{ Carbon\Carbon::parse($post->published)->formatLocalized('%d %B') }}</p>
    {!!  $post->content !!}
@stop