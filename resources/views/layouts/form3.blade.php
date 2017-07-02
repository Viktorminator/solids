<h2>Задать вопрос специалистам Solid’s</h2>
<div class="plate-solid plate-left">
    <p>* &dash; обязательные для заполнения поля</p>
    <div class="cor-tl"></div><div class="cor-tr"></div><div class="cor-bl"></div><div class="cor-br"></div>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form id="myform" action="{{ route('sendmail') }}" method="post">
        {{ csrf_field() }}
        <dl>
            <dt><label for="form-person">Представьтесь</label> </dt>
            <dd><input id="form-person" name="form-person" type="text" value="" tabindex="1" required></dd>
        </dl>
        <dl>
            <dt><label for="form-phone">Телефон</label></dt>
            <dd><input id="form-phone" class="phone" name="form-phone" type="text" value="" tabindex="2"></dd>
        </dl>
        <dl>
            <dt><label for="form-email">Эл. почта</label></dt>
            <dd><input id="form-email" name="form-email" type="text" value="" tabindex="3" required></dd>
        </dl>
        <dl>
            <dt><label for="form-company">Организация</label></dt>
            <dd><input id="form-company" name="form-company" type="text" value="" tabindex="4" required></dd>
        </dl>
        <dl>
            <dt><label for="form-question">Вопрос или<br>ситуация</label></dt>
            <dd><textarea id="form-question" name="form-question" rows="5" cols="20" tabindex="5" value="" required></textarea></dd>
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