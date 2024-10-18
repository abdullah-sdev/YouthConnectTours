<x-layout>
    {{-- <x-slot name="title">Home</x-slot> --}}
    <x-slot name="styles">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </x-slot>

    <x-container class="container"></x-container>
    <!-- <section class="container">
           <div class="text">
               <h2>Blog</h2>
               <p>A perfect experience with travel and tours</p>
           </div>
       </section> -->
    <x-container class="container">
        <div class="blog-template grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="section1 col-span-3">
                <div class="slider-blog ">
                    <!-- Slider main container -->
                    {{-- <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide"><img
                                    src="https://travelandtours.pk/wp-content/uploads/2019/10/Lahore-Aerial-Joyride.jpg"
                                    alt="" class="w-full h-full object-cover"></div>
                            <div class="swiper-slide"><img
                                    src="https://travelandtours.pk/wp-content/uploads/2019/10/Lahore-Aerial-Joyride.jpg"
                                    alt="" class="w-full h-full object-cover"></div>
                            <div class="swiper-slide"><img
                                    src="https://travelandtours.pk/wp-content/uploads/2019/10/Lahore-Aerial-Joyride.jpg"
                                    alt="" class="w-full h-full object-cover"></div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>

                    <script>
                        const swiper = new Swiper('.swiper', {
                            // Optional parameters
                            direction: 'vertical',
                            loop: true,

                            // If we need pagination
                            pagination: {
                                el: '.swiper-pagination',
                            },

                            // Navigation arrows
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                            },

                            // And if we need scrollbar
                            scrollbar: {
                                el: '.swiper-scrollbar',
                            },
                        });
                    </script> --}}
                </div>

                <div class="specs">
                    <div class="specs-header">
                        <ul class="flex space-x-4 border-b">
                            <li class="active border-b-2 border-blue-500">
                                <p class="pb-2">Availability</p>
                            </li>
                            <li>
                                <p class="pb-2">OverView</p>
                            </li>
                            <li>
                                <p class="pb-2">Experiences</p>
                            </li>
                        </ul>
                    </div>
                    <div class="spec-data mt-4">
                        <h3 class="text-lg font-semibold">Available Dates</h3>
                        <p class="text-gray-700 mt-2">{{ $tour }} Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Nam iste
                            consequuntur cum id cupiditate deleniti autem eius ex nemo quas eligendi doloribus placeat
                            reprehenderit
                            repudiandae temporibus ipsum mollitia magnam distinctio, nihil ut hic non. Cumque sed
                            maiores laboriosam totam quo.</p>
                    </div>
                </div>
            </div>
            <div class="section2 col-span-1">
                <div class="section2-card bg-white rounded-lg shadow-lg p-4">
                    <h2 class="text-2xl font-bold">Lahore Aerial Joyride</h2>
                    <p class="sub-heading mt-2">Lahore</p>
                    <hr class="my-4">
                    <p>Saturday</p>
                    <p class="mt-2">15 minutes</p>
                    <hr class="my-4">
                    <div class="tags flex space-x-2">
                        <span class="tag bg-blue-500 text-white rounded-md px-2 py-1">adventure</span>
                        <span class="tag bg-blue-500 text-white rounded-md px-2 py-1">city break</span>
                        <span class="tag bg-blue-500 text-white rounded-md px-2 py-1">less than a day</span>
                    </div>
                    <a href=""
                        class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Contact
                        Us to Plan Your Adventure!</a>
                </div>
                <div class="section2-card bg-white rounded-lg shadow-lg p-4">
                    <h3 class="text-lg font-bold">Need Help Booking?</h3>
                    <hr class="my-4">
                    <p>
                        Call our customer services team on the number below to speak to one of our advisers who will
                        help you with all of your holiday needs.
                    </p>

                    <p class="mt-2">+92 304 902 0000</p>

                </div>
                <div class="section2-card bg-white rounded-lg shadow-lg p-4">
                    <h3 class="text-lg font-bold">Popular</h3>
                    <hr class="my-4">
                    <div>
                        7 Days Skardu
                    </div>
                    <div class="mt-2">
                        1 Days Mushkpuri
                    </div>
                    <div class="mt-2">
                        1 Day Khanpur Dam
                    </div>

                </div>
                <div class="section2-card bg-white rounded-lg shadow-lg p-4">
                    <h3 class="text-lg font-bold">Why book with us?</h3>
                    <hr class="my-4">
                    <div>
                        <b>Best rates</b> <br>
                        Get the best rates, or get a refund.
                        No booking fees. Save money!
                        <br><br>
                        <b> Largest Selection</b> <br>
                        140,000+ hotels worldwide
                        130+ airlines
                        Over 3 million guest reviews
                        <br><br>
                        <b>We’re Always Here</b> <br>
                        Call or email us, anytime
                        Get 24-hour support before, during, and after your trip

                    </div>

                </div>
            </div>
        </div>
    </x-container>
</x-layout>
