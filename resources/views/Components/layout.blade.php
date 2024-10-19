<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youth Connect Tours</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script>  --}}
    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="{{ asset('asset/style2.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="{{ asset('asset/images/logo.png') }}" />
    {{-- <script src="https://kit.fontawesome.com/49a563159c.js" crossorigin="anonymous"></script> --}}

    @isset($styles)
        {{ $styles }}
    @endisset

</head>

<body class="bg-slate-50">
    <main>
        <x-nav.nav>
            {{-- <x-nav-link href="{{ route('home') }}"> <i class="fa-solid fa-house"></i> Home</x-nav-link> --}}
            <x-nav.nav-link href="{{ route('home') }}"> <i class="fa-solid fa-house"></i>&nbsp;Home</x-nav.nav-link>
            <x-nav.nav-link href="{{ route('about') }}"> <i
                    class="fa-solid fa-circle-info"></i>&nbsp;About</x-nav.nav-link>
            <x-nav.nav-link href="{{ route('destinys') }}"> <i
                    class="fa-solid fa-location-dot"></i>&nbsp;Destination</x-nav.nav-link>
            <x-nav.nav-link href="{{ route('vaccations') }}"> <i class="fa-solid fa-tree">
                </i>&nbsp;Attractions</x-nav.nav-link>
            {{-- <x-nav.nav-link href="{{ route('tour.detail',  ['tour' => 'Nathiagali']) }}"><i class="fa-solid fa-truck-fast"></i>Transportation</x-nav.nav-link> --}}


        </x-nav.nav>

        {{ $slot }}





        <footer class="px-4 py-10 bg-[#3c3c3c] text-white text-0.8rem flex flex-col gap-6">
            {{-- <div class="flex flex-col sm:flex-row gap-6 sm:items-center"> --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="flex flex-col px-4 py-2 gap-2">
                    <h3 class="text-2xl font-semibold text-orange-400">Youth Connect Tours</h3>
                    <p>
                        Welcome to Youth Connect Tours L.L.C., a company based in the UAE that specializes in managing
                        tourism experiences. Our office is located in Dubai, UAE. We offer comprehensive tour programs
                        to both corporate and individuals. Our services include custom-designed holidays and desert
                        business travel, with a high level of attention to detail
                    </p>
                </div>
                <div class="flex flex-col px-4 py-2 gap-2">
                    <ul class="list-none p-0 m-0 gap-2">
                        <li>
                            <p class="font-semibold">Address</p>
                            <p>
                                Office No 24 Al Kazim Building, <br>
                                Abdu Saif Business Center, <br>
                                Near Al Qiyadha Metro Station, <br>
                                Dubai United Arab Emirates. <br> <br>
                            </p>
                        </li>
                        <li>
                            <p class="font-semibold">Phone</p>
                            <p>971 58 696 9672</p>
                        </li>
                        <li>
                            <p class="font-semibold">Email</p>
                            <p>{{ env('MAIL_FROM_ADDRESS') }}</p>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col px-4 py-2 gap-2">
                    <ul class="list-none p-0 m-0 gap-2">
                        <li>
                            <p class="font-semibold">Office Timing</p>
                            <p>9:00 AM - 6PM <br>
                                (Monday to Saturday) <br>
                            </p>
                        </li>
                    </ul>
                    <h3 class="text-2xl font-semibold">Follow Us:</h3>
                    <p class="social flex items-center gap-2 pl-3">
                        <a href="https://www.facebook.com" target="_blank" class="text-2xl hover:text-orange-500"><i
                                class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com" target="_blank" class="text-2xl hover:text-orange-500"><i
                                class="fa-brands fa-square-instagram"></i></a>
                        <a href="https://www.linkedin.com" target="_blank" class="text-2xl hover:text-orange-500"><i
                                class="fa-brands fa-linkedin"></i></a>
                        <a href="https://wa.me/send?phone=971586969672" target="_blank"
                            class="text-2xl hover:text-orange-500"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="https://www.youtube.com" target="_blank" class="text-2xl hover:text-orange-500"><i
                                class="fa-brands fa-youtube"></i></a>
                    </p>
                </div>
            </div>
            <div class="flex flex-row justify-between sm:items-center">
                <div class="py-2">
                    &copy; 2024 Youth Tour Connect All rights reserved.
                </div>
                <div class="py-2">
                    <a href="{{ @route('terms') }}" class="hover:underline">FAQ & Refund Policy</a>
                </div>
            </div>
        </footer>
    </main>

    <x-back-to-top></x-back-to-top>

    {{-- <div x-data="{ showToaster: false }" x-init="setTimeout(() => {
        if (localStorage.getItem('cookieAccepted') !== 'true') {
            showToaster = true;
            $refs.acceptButton.focus();
        }
    }, 500)" x-show="showToaster"
        class="fixed top-0 left-0 w-full h-screen bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50"
        @keydown.escape="showToaster = false" @click.self="showToaster = false" aria-live="polite">
        <div class="bg-white rounded-lg shadow-lg p-4 sm:max-w-md sm:mx-auto">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-xl font-semibold sm:text-xl">
                    This website uses cookies to ensure you get the best experience on our website.
                </p>
                <button x-ref="acceptButton"
                    class="text-2xl font-semibold bg-orange-500 text-white rounded-lg hover:bg-orange-600 px-4 py-2 transition-colors sm:text-xl"
                    @click="showToaster = false; localStorage.setItem('cookieAccepted', 'true')">
                    Accept
                </button>
            </div>
        </div>
    </div> --}}
    @if (session('notification'))
        <div x-data="{ show: true, color: {{ session('notification_type') === 'success' ? "'bg-green-500'" : "'bg-red-500'" }} }"
            x-show.transition.duration.1000="show"
            x-init="setTimeout(() => show = false, 5000)"
            class="fixed bottom-0 left-0 p-4 z-50"
            :class="color"
            >
            <div class="text-white rounded-lg shadow-lg px-4 py-2">
                {{ session('notification') }}
                {{-- Success --}}
                <button @click="show = false" class="absolute top-0 right-0 -mt-2 -mr-2 p-2 bg-white rounded-full text-gray-700 hover:bg-gray-200 focus:outline-none">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>
    @endif


    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>

</html>
