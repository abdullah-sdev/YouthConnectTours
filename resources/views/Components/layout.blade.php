<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel and Tours</title>
    <link rel="stylesheet" href="{{ asset('asset/style2.css') }}">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    @isset($styles)
        {{ $styles }}
    @endisset

</head>

<body>
    <main>
        <x-nav.nav>
            {{-- <x-nav-link href="{{ route('home') }}">Home</x-nav-link> --}}
            <x-nav.nav-link href="{{ route('home') }}">Vaccations</x-nav.nav-link>
            <x-nav.nav-link href="{{ route('tour.show', ['tour' => 'Skardu']) }}">Destination</x-nav.nav-link>
            <x-nav.nav-link href="{{ route('tour.show', ['tour' => 'Naran']) }}">Activation</x-nav.nav-link>
            <x-nav.nav-link href="{{ route('tour.show',  ['tour' => 'Nathiagali']) }}">Transportation</x-nav.nav-link>
            <x-nav.nav-link href="{{ route('tour.show', ['tour' => 'Kathmandu']) }}">Saughat</x-nav.nav-link>
        </x-nav.nav>


        {{ $slot }}





        <footer class="container">
            <div>
                <div>
                    <h3>Travel & Tours</h3>
                    <ul>
                        <li>258 G Model Town Lahore</li>
                        <li>0395 43244324</li>
                        <li>g9uZv@example.com</li>
                    </ul>
                </div>
                <div>
                    <h3>Follow Us:</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>X</li>
                        <li>LinkedIn</li>
                        <li>YouTube</li>
                        <li>WhatsApp</li>
                        <li>Instagram</li>
                    </ul>
                </div>
            </div>
            <div>
                <div>
                    &copy; 2024 WanderLust Adventure
                </div>
                <div>
                    <a href="">FAQ & Refund Policy</a>
                    <a href="">Developed By Abdullah</a>
                </div>
            </div>
        </footer>
    </main>
</body>

</html>
