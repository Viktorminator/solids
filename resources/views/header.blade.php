<ul class="navigation-secondary">

    @foreach($snav as $item)
        @if(Request::segment(1) == $item->alias)
            <li class="selected"><strong>{{ $item->pagetitle }}</strong><div class="angle"></div></li>
        @else
            @if(isset($parent))
                @if($parent->alias == $item->alias)
                    <li class="selected"><strong><a href="{{ $item->alias }}" title="{{ $item->title }}">{{ $item->pagetitle }}</a></strong><div class="angle"></div></li>
                @else
                    <li><a href="{{ $item->alias }}" title="{{ $item->title }}">{{ $item->pagetitle }}</a></li>
                @endif
            @else
                <li><a href="{{ $item->alias }}" title="{{ $item->title }}">{{ $item->pagetitle }}</a></li>
            @endif
        @endif
    @endforeach
</ul>

<div class="logo"><a href="http://solids.ru/"></a></div>

<ul class="navigation-phone">
    <li class="phone"><span class="ya-phone">+7 (495) 295-30-69</span></li>
    @if(Request::segment(1) == 'pozvonite-mne.html')
        <li class="selected"><strong>Позвоните мне</strong><div class="angle"></div></li>
    @else
        <li><a href="pozvonite-mne.html">Позвоните мне</a></li>
    @endif
</ul>
<ul class="navigation-primary">
    @foreach($pnav as $item)
        @if(Request::segment(1) == $item->alias)
            <li class="selected"><img src="{{ $item->image }}" alt="" /><strong>{{ $item->pagetitle }}</strong><div class="angle"></div></li>
        @else
            @if(isset($parent))
                @if($parent->alias == $item->alias)
                    <li class="selected"><img src="{{ $item->image }}" alt="" /><strong><a href="{{ $item->alias }}" title="{{ $item->title }}">{{ $item->pagetitle }}</a></strong><div class="angle"></div></li>
                @else
                    <li><a href="{{ $item->alias }}" title="{{ $item->title }}"><img src="{{ $item->image }}" alt="" />{{ $item->pagetitle }}</a></li>
                @endif
            @else
                <li><a href="{{ $item->alias }}" title="{{ $item->title }}"><img src="{{ $item->image }}" alt="" />{{ $item->pagetitle }}</a></li>
            @endif
        @endif
    @endforeach
</ul>