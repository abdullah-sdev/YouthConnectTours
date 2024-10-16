{{-- <li class="{{ request()->url() == $href ? 'active' : '' }}">
    <a href="{{ $href }}" class="text-decoration-none text-white text-sm px-6 py-2 block font-thin">{{ $slot }}</a>
</li> --}}

<li class="{{ request()->url() == $href ? 'active bg-gray-800' : '' }} hover:bg-gray-600">
    <a href="{{ $href }}" class="text-decoration-none text-white text-sm px-6 py-2 block font-thin">{{ $slot }}</a>
</li>
