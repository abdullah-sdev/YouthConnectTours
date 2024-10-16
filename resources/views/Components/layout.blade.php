<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel and Tours</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script>  --}}
    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="{{ asset('asset/style2.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <script src="https://kit.fontawesome.com/49a563159c.js" crossorigin="anonymous"></script> --}}
     
    @isset($styles)
        {{ $styles }}
    @endisset

</head>

<body class="bg-slate-50">
    <main>
        <x-nav.nav>
            {{-- <x-nav-link href="{{ route('home') }}"> <i class="fa-solid fa-house"></i> Home</x-nav-link> --}}
            <x-nav.nav-link href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Home</x-nav.nav-link>
            <x-nav.nav-link href="{{ route('about') }}"> <i class="fa-solid fa-circle-info"></i> About</x-nav.nav-link>
            <x-nav.nav-link href="{{ route('vaccations') }}"><i class="fa-solid fa-tree"></i>Vaccations</x-nav.nav-link>
            <x-nav.nav-link href="{{ route('destinys') }}"><i class="fa-solid fa-location-dot"></i>Destination</x-nav.nav-link>
            {{-- <x-nav.nav-link href="{{ route('tour.detail',  ['tour' => 'Nathiagali']) }}"><i class="fa-solid fa-truck-fast"></i>Transportation</x-nav.nav-link> --}}


        </x-nav.nav>
        {{-- <div class="burger">B</div> --}}

        {{ $slot }}





        <footer class="container">
            <div>
                <div>
                    <h3>Youth Connect Tours</h3>
                    <ul>
                        <li>
                            <p>
                                <b>Address</b> <br>
                                Office No 24 Al Kazim Building, <br>
                                 Abdu Saif Business Center, <br>
                                  Near Al Qiyadha Metro Station, <br>
                                   Dubai United Arab Emirates. <br> <br>
                               
                            </p>
                        </li>
                        <li>971 58 696 9672</li>
                        <li>{{ env('MAIL_FROM_ADDRESS') }}</li>
                    </ul>
                </div>
                <div>
                   <ul>
                    <li>   &nbsp;</li>
                    <li>   &nbsp;</li>
                    <li><b>Office Timing</b> <br></li>
                    <li>9:00 AM - 6PM <br></li>
                    <li>(Monday to Saturday) <br></li>
                    <li>&nbsp;</li>
                   </ul>
                   <h3>Follow Us:</h3>
                 <p class="social">
                    <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="https://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://wa.me/send?phone=971586969672" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="https://www.youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                 </p>
                    {{-- <ul>
                        <li>Facebook</li>
                        <li>X</li>
                        <li>LinkedIn</li>
                        <li>YouTube</li>
                        <li>WhatsApp</li>
                        <li>Instagram</li>
                    </ul> --}}
                </div>
                <div>
                    
                </div>
            </div>
            <div>
                <div>
                    &copy; 2024 Youth Tour Connect
                </div>
                <div>
                    <a href="">FAQ & Refund Policy</a>
                    {{-- <a href="">Developed By Abdullah</a> --}}
                </div>
            </div>
        </footer>
    </main>
    <script>
        // nav mobile responsive
        const burger = document.querySelector(".burger");
        const nav = document.getElementById("navigation");

        burger.addEventListener("click", () => {
            // nav.display block
            nav.style.display = "none";
        });
    </script>
</body>

</html>
