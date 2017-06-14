@extends('layout')
@section('content')
    <h1 class="big">{{ $parent->menutitle }}</h1>
    <h2>Если ИП арендует помещение, нужно ли ему платить единый социальный налог с дохода? </h2>
    <p class="desc">{{ $author_name }}, {{ Helpers::getRusDate($post->published, 'd m Y') }}</p>
    <ul class="navigation-side">
        <li><a href="pravovyie-voprosyi/">Правовые вопросы</a></li>
        <li class="selected"><div class="angle"></div><strong><a href="buxgalterskij-uchet/" title="Бухгалтерский учет">Бухгалтерский учет</a></strong></li>
        <li><a href="kadrovoe-deloproizvodstvo/">Кадровое делопроизводство</a></li>
    </ul>


    {!!  $post->content !!}
    @include('layouts.form3')
@stop