<nav id="navigation" class="flex justify-between items-center fixed z-1000 w-full">
    {{-- <img src="{{ asset('asset/logo.png') }}" alt="Travel an Tours logo" height="100px"> --}}
    <a href="{{ route('home') }}">
    <img src="https://youthconnecttours.com/assets/images/cname.png" alt="Youth connect tours logo" height="100px">

    </a>
    <ul class="bg-[rgb(255,68,0)] flex justify-end items-end">
        {{ $slot }}
    </ul>
</nav>