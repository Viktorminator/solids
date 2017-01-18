@extends('layout')
@section('content')
<h1 class="big">Ответы на вопросы</h1>
<h1>Новые ответы</h1>
<ul class="navigation-side"><li><a href="pravovyie-voprosyi/">Правовые вопросы</a></li>

    <li><a href="buxgalterskij-uchet/">Бухгалтерский учет</a></li>

    <li><a href="kadrovoe-deloproizvodstvo/">Кадровое делопроизводство</a></li>

</ul>
<h3><a href="kak-pravilno-ukazyivat-mesto-nahozhdeniya-organizacii.html" title="Подскажите, как с сентября 2014 г. нужно в уставе правильно указывать место нахождения организации?">Подскажите, как с сентября 2014 г. нужно в уставе правильно указывать место нахождения организации?</a></h3>
<p class="desc">Светлана Подругина</p>
<p class="mini"></p>
<h3><a href="moya-firma-byila-zaregistrirovana-kak-odo.html" title="Моя фирма была зарегистрирована как ОДО. С 1 сентября ее упразднили. Как теперь менять наименование и учредительные документы?">Моя фирма была зарегистрирована как ОДО. С 1 сентября ее упразднили. Как теперь менять наименование и учредительные документы?</a></h3>
<p class="desc">Ольга Киреева</p>
<p class="mini"></p>
<h3><a href="pravilno-propisat-operacii-v-buhuchyote.html" title="Каким образом в бухучете правильно прописать операции, которые касаются продажи некоторой доли уставного капитала?">Каким образом в бухучете правильно прописать операции, которые касаются продажи некоторой доли уставного капитала?</a></h3>
<p class="desc">Ирина Чепурова</p>
<p class="mini"></p>
<h3><a href="rezerv-po-somnitelnyim-dolgam.html" title="Подскажите, наша компания имеет право формировать в бухучете и налоговой отчетности определенный резерв по сомнительным долгам, если мы работаем на основной системе налогообложения и терпим убытки?">Подскажите, наша компания имеет право формировать в бухучете и налоговой отчетности определенный резерв по сомнительным долгам, если мы работаем на основной системе налогообложения и терпим убытки?</a></h3>
<p class="desc">Алла Андреева</p>
<p class="mini"></p>
<h3><a href="myi-ne-vyistavili-schet-fakturu-na-avans.html" title="Мы не выставили счет-фактуру на аванс. Грозит ли нам штраф?">Мы не выставили счет-фактуру на аванс. Грозит ли нам штраф?</a></h3>
<p class="desc">Ольга Киреева</p>
<p class="mini"></p>

<!--ul class="pagination">

</ul-->


<h2>Задать вопрос специалистам Solid’s</h2>
<div class="plate-solid plate-left">

    <div class="cor-tl"></div><div class="cor-tr"></div><div class="cor-bl"></div><div class="cor-br"></div>
    <form id="myform" action="faq.html" method="post">
        <input type="hidden" name="form-ip" value="207.241.237.225">
        <input type="hidden" name="nospam:blank" value="">
        <dl>
            <dt><label for="form-person">Представьтесь</label></dt>
            <dd><input id="form-person" name="form-person" type="text" value="" tabindex="1" data-validation="required" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;"></dd>
        </dl>
        <dl>
            <dt><label for="form-phone">Телефон</label></dt>
            <dd><input id="form-phone" class="phone" name="form-phone" type="text" value="" tabindex="2"></dd>
        </dl>
        <dl>
            <dt><label for="form-email">Эл. почта</label></dt>
            <dd><input id="form-email" name="form-email" type="text" value="" tabindex="3" data-validation="validate_email"></dd>
        </dl>
        <dl>
            <dt><label for="form-company">Организация</label></dt>
            <dd><input id="form-company" name="form-company" type="text" value="" tabindex="4" data-validation="required"></dd>
        </dl>
        <dl>
            <dt><label for="form-question">Вопрос или<br>ситуация</label></dt>
            <dd><textarea id="form-question" name="form-question" rows="5" cols="20" tabindex="5" value="" data-validation="required"></textarea></dd>
        </dl>
        <div class="buttons"><div class="button"><a href="javascript:{}" id="send"><span>Отправить</span></a></div></div>
    </form>
</div>
@stop