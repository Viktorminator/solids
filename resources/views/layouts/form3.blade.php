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
            <dt><label for="person">Представьтесь</label> </dt>
            <dd><input id="person" name="person" type="text" value="" tabindex="1" required></dd>
        </dl>
        <dl>
            <dt><label for="phone">Телефон</label></dt>
            <dd><input id="phone" class="phone" name="phone" type="text" value="" tabindex="2"></dd>
        </dl>
        <dl>
            <dt><label for="email">Эл. почта</label></dt>
            <dd><input id="email" name="email" type="text" value="" tabindex="3" required></dd>
        </dl>
        <dl>
            <dt><label for="company">Организация</label></dt>
            <dd><input id="company" name="company" type="text" value="" tabindex="4" required></dd>
        </dl>
        <dl>
            <dt><label for="question">Вопрос или<br>ситуация</label></dt>
            <dd><textarea id="question" name="question" rows="5" cols="20" tabindex="5" value="" required></textarea></dd>
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