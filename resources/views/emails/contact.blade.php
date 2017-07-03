@extends('beautymail::templates.widgets')

@section('content')

    @include('beautymail::templates.widgets.articleStart')

    <h4 class="primary"><strong>Письмо с Солидс</strong></h4>
    <p>Email: {{ $request->input('email') }}</p>
    <p>Имя: {{ $request->input('person') }}</p>
    <p>Вопрос: {{ $request->input('question') }}</p>

    @include('beautymail::templates.widgets.articleEnd')
    @include('beautymail::templates.widgets.newfeatureStart')

    <h4 class="secondary"><strong>Дополнительные контакты:</strong></h4>
    <p>Организация: {{ $request->input('company') }}</p>
    <p>Телефон: {{ $request->input('phone') }}</p>
    <p>Время звонка (если заказной звонок): <b>{{ $request->input('calltime') }}</b></p>
    @include('beautymail::templates.widgets.newfeatureEnd')

@stop