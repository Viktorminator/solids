<h1 class="big">Заказ звонка</h1>
<div class="plate-solid plate-center">
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
            <dt><label for="person">Представьтесь *</label></dt>
            <dd><input id="person" name="person" type="text" value="" tabindex="1" required></dd>
        </dl>
        <dl>
            <dt><label for="phone">Телефон *</label></dt>
            <dd><input id="phone" class="phone" name="phone" type="text" value="" tabindex="2"></dd>
        </dl>
        <dl>
            <dt><label for="calltime">Время звонка</label></dt>
            <dd><input id="calltime" name="calltime" type="text" value="" tabindex="3" required></dd>
        </dl>
        <dl>
            <dt><label for="question">Вопрос или<br>ситуация *</label></dt>
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