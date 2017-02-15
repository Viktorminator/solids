@extends('layout')
@section('content')
        <h1 class="big">Статьи и обзоры</h1>
        <div class="columns-2">
            <div class="col-1">
                @foreach($posts as $item)
                    <h3><a href="{{ $item->alias }}" title="{{ $item->longtitle }}">{{ $item->title }}</a></h3>
                    <p class="desc">{{ $item->published }}, {{ $item->author_id }}</p>
                    <p class="mini">{!! $item->description !!}</p>
                @endforeach
            </div><div class="col-2">
                <h3><a href="perehod-na-envd-v-2014-g.html" title="Переход на ЕНВД в 2014 г.">Переход на ЕНВД в 2014 г.</a></h3>
                <p class="desc">29 апреля 2014, Ирина Чепурова</p>
                <p class="mini">Единый налог на&nbsp;вмененный доход&nbsp;— это система налогообложения, которую согласно&nbsp;ст.&nbsp;492 Гражданского кодекса России могут применять предприятия, специализирующиеся на&nbsp;розничной торговле. Перейти на&nbsp;ЕНВД организации имеют право в&nbsp;удобное для них время&nbsp;— с&nbsp;любой даты на&nbsp;протяжении года (об&nbsp;этом разъяснено в&nbsp;письме Федеральной налоговой службы России от&nbsp;11&nbsp;ноября 2013&nbsp;г. № ЕД-4-3/20133).</p>
                <h3><a href="metodyi-osparivaniya-vzyiskaniya-dolgov-po-nalogam.html" title="Методы оспаривания взыскания долгов по налогам">Методы оспаривания взыскания долгов по налогам</a></h3>
                <p class="desc">29 апреля 2014, Алла Андреева</p>
                <p class="mini">Наличие у компаний или предпринимателей долгов перед бюджетом рано или поздно приводит к тому, что налоговые органы начнут процедуру их взыскания. Однако на практике фискалы довольно часто допускают ряд процедурных ошибок, которые позволят вам оспорить их действия.</p>
                <h3><a href="procenty-kreditam-mozhno-otnosit-v-sostav-zatrat.html" title="Проценты по&nbsp;кредитам можно относить в&nbsp;состав затрат">Проценты по&nbsp;кредитам можно относить в&nbsp;состав затрат</a></h3>
                <p class="desc">06 апреля 2014, Ирина Чепурова</p>
                <p class="mini">Во&nbsp;время деятельности любой компании возникают различные расходы, к&nbsp;которым относятся затраты на&nbsp;финансовые вложения, приобретение нематериальных активов, а&nbsp;также проценты по&nbsp;кредитам и&nbsp;займам, которые были получены организацией. </p>
                <h3><a href="sozdanie-lichnogo-kabineta-na-sajte-pfr-osobennost-preimushhestva.html" title="Создание личного кабинета на&nbsp;сайте ПФР: особенности и&nbsp;преимущества ">Создание личного кабинета на&nbsp;сайте ПФР: особенности и&nbsp;преимущества</a></h3>
                <p class="desc">03 апреля 2014, Светлана Подругина</p>
                <p class="mini">Пенсионный фонд Российской Федерации, по&nbsp;примеру налоговой службы, не&nbsp;так давно представил свой новый сервис «Личный кабинет плательщика». Данное нововведение будет полезным абсолютно для всех бухгалтеров Москвы и&nbsp;региона, включая компании, которые не&nbsp;имеют электронной подписи и&nbsp;не&nbsp;сдают отчетность в&nbsp;электронном виде.</p>
           </div>
        </div>
        <ul class="pagination">
            <li class="selected"><div class="angle"></div><strong>1</strong></li>
            <li><a href="stati.html?page=2">2</a></li>
            <li><a href="stati.html?page=3">3</a></li>
            <li><a href="stati.html?page=4">4</a></li>
            <li><a href="stati.html?page=5">5</a></li>
            <li><a href="stati.html?page=6">6</a></li><li><a href="stati.html?page=2">...</a></li>
        </ul>
@stop