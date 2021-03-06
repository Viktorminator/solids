<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="norton-safeweb-site-verification" content="8mnr2vblm6vez-2t6bk30anrpymcg8iekk8ik0gie992dbexv5fllcucloxa1abu0rrpgj58xlueulusvlpsghykt5demxxenx4cl0in1qztqkebebegt8z7onnqii5x" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7,IE=9" />
    <base href="/" />
    <title>{{ $post->title, 'Бухгалтерское обслуживание, юридические услуги, кадровое делопроизводство, аудит и консалтинг от Солидс' }}</title>
    <meta name='description' content='{{ $post->description , 'Услуги консалтинговой компании Солидс: бухгалтерское обслуживание, юридические услуги, кадровое делопроизводство, аудит, консалтинг' }}' />
    <meta name='keywords' content='{{ $post->keywords, 'Бухгалтерское обслуживание, юридические услуги, кадровое делопроизводство, аудит, консалтинг' }}' />
    <link rel="canonical" href="/" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel='shortcut icon' href="/favicon.ico" type="ico" />
    <link rel="author" href="humans.txt" />
    <link rel='apple-touch-icon-precomposed' href="/css/i/apple-touch-icon-57x57-precomposed.png" />
    <link rel='apple-touch-icon-precomposed' sizes="72x72" href="/css/i/apple-touch-icon-72x72-precomposed.png" />
    <link rel='apple-touch-icon-precomposed' sizes="114x114" href="/css/i/apple-touch-icon-114x114-precomposed.png" />
    <link rel='stylesheet' href="/css/common.css" type="text/css" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function onSubmit(token) {
            document.getElementById("myform").submit();
        }
    </script>
    @include('layouts.seojson')
</head>
<body class="color-scheme-1">
<div id="layout">
    <div id="header">
        @include('header')
    </div>
    <div id="content">
        @yield('content')
    </div>
    <div id="imprint">
        <ul class="social">
        </ul>
        <hr />
        <div class="copyrights">
            <p>©&nbsp;2012—2017<br> ООО&nbsp;«Солидс»</p>
            <p>Дизайн&nbsp;— <a href="http://modx.ws">Студия&nbsp;MODX</a></p>
        </div>

        <div class="address">
            <p>121170, г. Москва,  ул.  Неверовского, дом 10, стр. 4, мансарда №0, пом. 2, ком. 9.
                <a class="nobr" href="kontaktyi.html">Контактная информация</a>
            </p>
        </div>
        <!--p class="vcard" style="visibility:hidden;">
         <p>
           <span class="category">Компания</span>
           <span class="fn org">Solid's</span>
         </p>
         <p class="adr">
           <span class="locality">г. Москва</span>,
           <span class="street-address">ул. Угрешская, 2, стр. 33, офис 9</span>
         </p>
         <p>Телефон: <span class="tel">+8(495)295-30-69</span></div>
         <p>Мы работаем <span class="workhours">ежедневно с 09:00 до 24:00</span>
           <span class="url">
             <span class="value-title" title="http://solids.ru/"> </span>
           </span>
         </p>
        </p-->
        <form action="/search" class="search" method="get">

            <input class="keywords" type="text" name="q" value="поиск" onclick="if (this.value == 'поиск') {this.value = '';}" onblur="if (this.value == '') {this.value = 'поиск';}"/>
            <input class="go" type="image" value="Искать!" src="/css/i/search.gif"/>

        </form>

    </div>
</div>

<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/988764364/?value=0&amp;label=ni2dCPyZiAUQzLG91wM&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>

</body></html>