<h1 class="big">Заказ звонка</h1>
<div class="plate-solid plate-center">

    <div class="cor-tl"></div><div class="cor-tr"></div><div class="cor-bl"></div><div class="cor-br"></div>
    <form id="myform" action="/sendmail" method="post">
        <dl>
            <dt><label for="form-person">Представьтесь</label></dt>
            <dd><input id="form-person" name="form-person" type="text" value="" tabindex="1" data-validation="required"></dd>
        </dl>
        <dl>
            <dt><label for="form-phone">Телефон</label></dt>
            <dd><input id="form-phone" class="phone" name="form-phone" type="text" value="" tabindex="2"></dd>
        </dl>
        <dl>
            <dt><label for="form-calltime">Время звонка</label></dt>
            <dd><input id="form-calltime" name="form-calltime" type="text" value="" tabindex="3" data-validation="required"></dd>
        </dl>
        <dl>
            <dt><label for="form-question">Вопрос или<br>ситуация</label></dt>
            <dd><textarea id="form-question" name="form-question" rows="5" cols="20" tabindex="5" value="" data-validation="required"></textarea></dd>
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