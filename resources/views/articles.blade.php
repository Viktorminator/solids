@extends('layout')
@section('content')
        <h1 class="big">Статьи и обзоры</h1>
        <div class="columns-2">
            <div class="col-1">
                @foreach($posts as $item)
                    <h3><a href="{{ $item->alias }}" title="{{ $item->pagetitle }}">{{ $item->pagetitle }}</a></h3>
                    <p class="desc">{{ Helpers::getRusDate($item->published) }}, {{ $item->author->author_name }}</p>
                    <p class="mini">{!! $item->description !!}</p>
                    @if($loop->index == 3)
                        </div><div class="col-2">
                    @endif
                @endforeach
            </div>
        </div>

        {{ $posts->links() }}
@stop