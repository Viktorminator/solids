<h2 class="section">Заказать услуги</h2>
<div class="plate-solid plate-center">

    <div class="cor-tl"></div><div class="cor-tr"></div><div class="cor-bl"></div><div class="cor-br"></div>
    <form id="myform" action="/sendmail" method="post">
        <dl>
            <dt><label for="form-person">Представьтесь</label> </dt>
            <dd><input id="form-person" name="form-person" type="text" value="" tabindex="1" data-validation="required" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"></dd>
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
            <dd><textarea id="form-question" name="form-question" rows="5" cols="20" tabindex="5" value="" data-validation="required"></textarea><grammarly-btn><div style="z-index: 2; opacity: 1; transform: translate(284.516px, 82px);" class="_e725ae-textarea_btn _e725ae-anonymous _e725ae-not_focused" data-grammarly-reactid=".0"><div class="_e725ae-transform_wrap" data-grammarly-reactid=".0.0"><div title="Protected by Grammarly" class="_e725ae-status" data-grammarly-reactid=".0.0.0">&nbsp;</div></div><span class="_e725ae-btn_text" data-grammarly-reactid=".0.1">Not signed in</span></div></grammarly-btn></dd>
        </dl>
        <div class="button">
        <button
                class="g-recaptcha"
                data-sitekey="6LfBFiQUAAAAAI36ItMGD6R9TGH2O6tPekBOhjjU"
                data-callback="onSubmit">
            Отправить
        </button>
        </div>
    </form>
</div>