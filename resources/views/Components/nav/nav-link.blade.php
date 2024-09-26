<li class="{{ request()->is($href) ? 'active' : '' }}">
    <a href="{{ $href }}">{{ $slot }}</a>
</li>

