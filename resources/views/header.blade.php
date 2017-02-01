<ul class="navigation-secondary">

    @foreach($snav as $item)
        @if(Request::segment(1) == $item->alias)
            <li class="selected"><strong>{{ $item->pagetitle }}</strong><div class="angle"></div></li>
        @else
            <li><a href="{{ $item->alias }}" title="{{ $item->title }}">{{ $item->pagetitle }}</a></li>
        @endif
    @endforeach
    <!--li ><a href="o-kompanii.html">О компании</a><div class="angle"></div></li>
    <li ><a href="stati.html">Статьи</a><div class="angle"></div></li>
    <li ><a href="novosti.html">Новости</a><div class="angle"></div></li>
    <li ><a href="faq.html">Ответы</a><div class="angle"></div></li-->
</ul>

<div class="logo"><a href="http://solids.dev/"></a></div>

<ul class="navigation-phone">
    <li class="phone"><span class="ya-phone">+7 (495) 698-97-97</span></li>
    <li><a href="pozvonite-mne.html">Позвоните мне</a></li>
</ul>
<ul class="navigation-primary">
    @foreach($pnav as $item)
        @if(Request::segment(1) == $item->alias)
            <li class="selected"><img src="{{ $item->image }}" alt="" /><strong>{{ $item->pagetitle }}</strong><div class="angle"></div></li>
        @else
            <li><a href="{{ $item->alias }}" title="{{ $item->title }}"><img src="{{ $item->image }}" alt="" />{{ $item->pagetitle }}</a></li>
        @endif
    @endforeach
</ul>