<x-layout>
    {{-- <x-slot name="title">Home</x-slot> --}}
    <x-slot name="styles">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </x-slot>

    <x-container></x-container>
    <!-- <section class="container">
           <div class="text">
               <h2>Blog</h2>
               <p>A perfect experience with travel and tours</p>
           </div>
       </section> -->
    <x-container>
        <div class="blog-template grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="section1 col-span-3">
                <div class="slider-blog ">
                    <!-- Slider main container -->
                    <div class="mb-8">
                        <div class="swiper ">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide md:h-auto"><img
                                        src="https://travelandtours.pk/wp-content/uploads/2019/10/Lahore-Aerial-Joyride.jpg"
                                        alt=""></div> 
                                <div class="swiper-slide md:h-auto"><img
                                        src="https://travelandtours.pk/wp-content/uploads/2019/10/Lahore-Aerial-Joyride.jpg"
                                        alt=""></div>
                                <div class="swiper-slide md:h-auto"><img
                                        src="https://travelandtours.pk/wp-content/uploads/2019/10/Lahore-Aerial-Joyride.jpg"
                                        alt=""></div>
                            </div>
                            <!-- If we need pagination -->
                            {{-- <div class="swiper-pagination"></div> --}}

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <!-- If we need scrollbar -->
                            {{-- <div class="swiper-scrollbar"></div> --}}
                        </div>

                        <script>
                            const swiper = new Swiper('.swiper', {
                                // Optional parameters
                                direction: 'horizontal',
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
                        </script>
                    </div>

                    <div x-data="{ activeTab: 'availability' }" class="specs">
                        <div class="specs-header">
                            <ul class="flex space-x-4 border-b">
                                <li :class="{ 'border-b-2 border-orange-500': activeTab === 'availability' }"
                                    @click="activeTab = 'availability'; console.log('clicked availability')">
                                    <p class="pb-2">Availability</p>
                                </li>
                                <li :class="{ 'border-b-2 border-orange-500': activeTab === 'overview' }"
                                    @click="activeTab = 'overview'; console.log('clicked activeTab')">
                                    <p class="pb-2">Overview</p>
                                </li>
                                <li :class="{ 'border-b-2 border-orange-500': activeTab === 'experiences' }"
                                    @click="activeTab = 'experiences'; console.log('clicked experiences')">
                                    <p class="pb-2">Experiences</p>
                                </li>
                            </ul>
                        </div>
                        <div class="spec-data mt-4" x-show="activeTab === 'availability'">
                            <h3 class="text-lg font-semibold">Available Dates</h3>
                            <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam
                                iure sunt explicabo optio ex, non modi sequi cum tempora eius quia a inventore sint
                                beatae illo dicta autem velit vel odio veniam tempore quos eaque! Dolores, nulla debitis
                                atque beatae nemo explicabo aspernatur aliquam ipsam ullam placeat corporis, similique
                                exercitationem.</p>
                        </div>
                        <div class="spec-data mt-4 hidden" x-show="activeTab === 'overview'">
                            <h3 class="text-lg font-semibold">Overview</h3>
                            <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia
                                voluptatum debitis, doloribus, quod distinctio quas, doloremque consequatur cumque
                                voluptatem voluptates recusandae doloremque, doloremque voluptatem.</p>
                        </div>
                        <div class="spec-data mt-4 hidden" x-show="activeTab === 'experiences'">
                            <h3 class="text-lg font-semibold">Experiences</h3>
                            <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia
                                voluptatum debitis, doloribus, quod distinctio quas, doloremque consequatur cumque
                                voluptatem voluptates recusandae doloremque, doloremque voluptatem.</p>
                        </div>
                    </div>

                </div>
                
            
            </div>
            <div class="section2 col-span-2 grid grid-cols-1 gap-3 md:col-span-1">
                <div class="section2-card bg-white rounded-lg shadow-lg p-4">
                    <h2 class="text-2xl font-bold">Lahore Aerial Joyride</h2>
                    <p class="sub-heading mt-2">Lahore</p>
                    <hr class="my-4">
                    <p>Saturday</p>
                    <p class="mt-2">15 minutes</p>
                    <hr class="my-4">
                    <div class="tags flex space-x-2 flex-wrap">
                        <span
                            class="tag text-sm font-semibold italic bg-[#b5b2b2] rounded-l-full rounded-r-lg capitalize px-4 py-1 m-0.5 cursor-pointer">adventure</span>
                        <span
                            class="tag text-sm font-semibold italic bg-[#b5b2b2] rounded-l-full rounded-r-lg capitalize px-4 py-1 m-0.5 cursor-pointer">city
                            break</span>
                        <span
                            class="tag text-sm font-semibold italic bg-[#b5b2b2] rounded-l-full rounded-r-lg capitalize px-4 py-1 m-0.5 cursor-pointer">less
                            than a day</span>
                    </div>
                    <a href=""
                        class="mt-4 inline-block bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-full">Book
                        Now</a>
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
    </x-container>
</x-layout>
