<x-layout>
    {{-- <x-slot name="title">Home</x-slot> --}}
    <x-slot name="styles">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </x-slot>

    <section class="container"></section>
    <!-- <section class="container">
           <div class="text">
               <h2>Blog</h2>
               <p>A perfect experience with travel and tours</p>
           </div>
       </section> -->
    <section class="container">
        <div class="blog-template">
            <div class="section1">
                <div class="slider-blog">
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide"><img
                                    src="https://travelandtours.pk/wp-content/uploads/2019/10/Lahore-Aerial-Joyride.jpg"
                                    alt=""></div>
                            <div class="swiper-slide"><img
                                    src="https://travelandtours.pk/wp-content/uploads/2019/10/Lahore-Aerial-Joyride.jpg"
                                    alt=""></div>
                            <div class="swiper-slide"><img
                                    src="https://travelandtours.pk/wp-content/uploads/2019/10/Lahore-Aerial-Joyride.jpg"
                                    alt=""></div>
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
                    </script>
                </div>

                <div class="specs">
                    <div class="specs-header">
                        <ul>
                            <li class="active">
                                <p>Availability</p>
                            </li>
                            <li>
                                <p>OverView</p>
                            </li>
                            <li>
                                <p>Experiences</p>
                            </li>
                        </ul>
                    </div>
                    <div class="spec-data">
                        <h3>Available Dates</h3>
                        <p>{{ $tour }} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam iste
                            consequuntur cum id
                            cupiditate deleniti autem eius ex nemo quas eligendi doloribus placeat reprehenderit
                            repudiandae temporibus ipsum mollitia magnam distinctio, nihil ut hic non. Cumque sed
                            maiores laboriosam totam quo.</p>
                    </div>
                </div>
            </div>
            <div class="section2">
                <div class="section2-card">
                    <h2>Lahore Aerial Joyride</h2>
                    <p class="sub-heading">Lahore</p>
                    <hr>
                    <p>Saturday</p>
                    <p>15 minutes</p>
                    <hr>
                    <div class="tags">
                        <span class="tag">adventure</span>
                        <span class="tag">city break</span>
                        <span class="tag">less than a day</span>
                    </div>
                    <a href="">Contact Us to Plan Your Adventure!</a>
                </div>
                <div class="section2-card">
                    <h3>Need Help Booking?</h3>
                    <hr>
                    <p>
                        Call our customer services team on the number below to speak to one of our advisers who will
                        help you with all of your holiday needs.
                    </p>

                    <p>+92 304 902 0000</p>

                </div>
                <div class="section2-card">
                    <h3>Popular</h3>
                    <hr>
                    <div>
                        7 Days Skardu
                    </div>
                    <div>
                        1 Days Mushkpuri
                    </div>
                    <div>
                        1 Day Khanpur Dam
                    </div>

                </div>
                <div class="section2-card">
                    <h3>Why book with us?</h3>
                    <hr>
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
    </section>
</x-layout>
