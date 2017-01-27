@extends('layout')

@section('content')
    {!! $post->content !!}
    <hr />
    <div class="columns-3">
        <div class="col-1">
            <h2>Статьи и обзоры</h2>
            <p><a href="vyihod-uchastnika-iz-ooo.html">Выход участника из ООО</a></p>
            <p class="desc">15 сентября 2014, Ирина Чепурова</p>
            <p class="mini">Изменения в российском Гражданском кодексе, которые начали действовать 1 сентября 2014 г., существенно изменили рабочую базу юрлиц, в том числе и особенности выхода из компании ее участников.</p>
        </div>
        <div class="col-2">
            <h2>Новости и события</h2>
            <p><a href="vvedenie-ogranichenij-po-nalichnyim-raschetam.html">Введение ограничений по наличным расчетам</a></p>
            <p class="desc">16 ноября</p>
            <p class="mini">Речь об ограничении прав компаний, а также ИП при распределении наличных средств, поступивших в кассу организации по факту оказания услуг или продажи товаров.</p>
        </div>
        <div class="col-3">
            <h2>Ответы на вопросы</h2>
            <p><a href="kak-pravilno-ukazyivat-mesto-nahozhdeniya-organizacii.html">Подскажите, как с сентября 2014 г. нужно в уставе правильно указывать место нахождения организации?</a></p>
            <p class="desc">Светлана Подругина</p>
        </div>
    </div>
@stop