<x-layout>
    <header
        class="bg-cover bg-no-repeat bg-fixed h-[80vh] text-center text-white text-1.7xl flex flex-col justify-center items-center bg-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.408), rgba(0, 0, 0, 0.743)),url('{{ asset('asset/images/youth-connect-tours.jpg') }}');">
        <div class="text">
            <h2 class="text-3xl font-bold">Youth Connect Tours</h2>
            <p>A Journey to Adventurous & Discover Amazing Places at Exclusive Deals</p>
        </div>
    </header>
    <x-container>
        <div class="head text-center">
            <h2 class="bold text-2xl font-bold border-b border-gray-300 pb-2">Explore our top offers</h2>
            <p class="text-center"><a href="{{ route('vaccations') }}"
                    class="no-underline text-[#fe7200] hover:underline">View All Popular Attractions</a></p>
        </div>

        <x-offerandtour>
            <x-slot:tour>
                @forelse ($attractions as $attraction)
                    <x-cards.card-1>

                        <div class="img flex justify-center">
                            {{-- <img src="https://picsum.photos/200/200/?travel,adventure" height="" alt=""> --}}
                            <img class="w-[200px] h-[200px] bg-cover bg-no-repeat bg-center object-cover rounded-[16px]"
                                src="{{ env('APP_ASSET') . 'uploads/' . $attraction->display_picture }}" alt="xx">
                            {{-- <p>{{ env('APP_ASSET').$attraction->display_picture }}</p> --}}
                        </div>
                        <div class="flex flex-col justify-center p-2">
                            <h4 class="text-xl font-bold">{{ $attraction->name }}</h4>
                            <span><i class="fa-solid fa-location-dot"></i>{{ $attraction->destination->name }},
                                UAE</span>
                            <p>
                                {{-- {{ $attraction->description }} --}}

                            </p>
                            <x-tags>
                                @forelse ($attraction->tags as $tag)
                                    <x-tag-item>{{ $tag->name }}</x-tag-item>
                                @empty
                                    no tags
                                @endforelse
                            </x-tags>
                            <p style="font-size:.7rem; ">
                                Ratings:
                                @for ($i = 0; $i < 5; $i++)
                                    <i class="fa-solid fa-star" style="color: rgb(255, 119, 0);"></i>
                                @endfor
                            </p>
                            <br>
                            {{-- <a href="{{ route('tour.detail', $attraction->slug()) }}"
                                class="inline-block mt-0.5 text-xs py-1 px-2.5 border-none rounded bg-[#fe7200] text-white cursor-pointer transition duration-300 hover:bg-[#454545] no-underline">View</a> --}}
                            <a href="{{  route('tour.make')  }}"
                                class="inline-block mt-0.5 text-sm py-2 px-4 rounded-md bg-[#fe7200] text-white font-semibold cursor-pointer transition duration-300 hover:bg-[#454545] shadow-sm hover:shadow-md no-underline">Book Now</a>
                        </div>
                    </x-cards.card-1>
                @empty
                    Coming Soon!
                @endforelse

            </x-slot:tour>

            <x-slot:popular>

                <x-cards.card-2 style="background-image: url('{{ asset('asset/images/product-banner01.png') }}');">
                    <div
                        class="txt flex flex-col items-center justify-center text-center bg-opacity-40 bg-orange-500 p-3 rounded-md text-slate-00">
                        <h5 class="text-2xl font-bold">Kids Adventure
                            <br> Kidzania
                        </h5>
                        {{-- <p class="text-sm">Saturdays</p>
                        <p class="text-sm">15 minutes</p> --}}
                        <a href="{{ route('book-a-tour') }}"
                            class="btn mt-3 px-4 py-2 text-sm font-semibold rounded-full bg-[#fe7200] text-white transition duration-300 hover:bg-[#454545]">Book
                            Now</a>
                    </div>
                </x-cards.card-2>
                <x-cards.card-2
                    style="background-image: url('{{ asset('asset/images/product-banner02.png') }}'); background-size: cover; background-color: rgba(3, 146, 209, 0.3281687675);">
                    <div
                        class="txt flex flex-col items-center justify-center text-center bg-opacity-50 bg-orange-500 p-3 rounded-md text-slate-00">
                        <h5 class="text-2xl font-bold">Theme Parks For Family</h5>
                        <a href="{{ route('book-a-tour') }}"
                            class="btn mt-3 px-4 py-2 text-sm font-semibold rounded-full bg-[#fe7200] text-white transition duration-300 hover:bg-[#454545]">Book
                            Now</a>
                    </div>
                </x-cards.card-2>
            </x-slot:popular>
        </x-offerandtour>

    </x-container>

    <x-container>
        <!-- Weekend Getaways -->

        <div class="text-center">
            <h2 class="bold text-2xl font-bold border-b border-gray-300 pb-2">Destinations</h2>
        </div>
        <div class="getaways grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mt-2">
            @forelse ($destinations as $destination)
                <x-cards.card-3
                    img="https://travelandtours.pk/wp-content/uploads/2019/10/56d305b4c83ec8e8a1be271c314af4ff-300x300.jpg">
                    <div class="txt flex flex-col justify-center items-center p-4 text-white rounded-md">
                        <h3 class="text-2xl font-bold">{{ $destination->name }}</h3>
                        <p class="">{{ $destination->ideal_time_to_visit }}</p>
                        <p class="text-sm">{{ $destination->ideal_time_period }} Days</p>
                        <a
                            href="{{ route('tour.make') }}"
                            class="mt-3 btn px-4 py-2 text-sm font-semibold rounded-md bg-[#fe7200] text-white transition duration-300 hover:bg-[#454545]">Book Now</a>
                    </div>
                </x-cards.card-3>
            @empty
                Coming Soon!
            @endforelse

        </div>
    </x-container>


    <!-- Advertise -->
    <section class="bg-center px-8 sm:px-11 py-8 flex flex-col bg-no-repeat bg-cover w-full"
        style="background-image: url('https://travelandtours.pk/wp-content/uploads/2020/05/iStock-537458148.jpg?id=1671');">
        <div class="advertisement flex justify-center items-center md:flex-row flex-col">
            <div class="left md:w-1/2 p-4">
                <div class="txt p-4 bg-gray-900 text-white text-2xl md:w-2/5">
                    <h2 class="bold text-4xl font-bold border-b border-gray-300 pb-2">
                        LAST MINUTE OFFERS
                    </h2>
                </div>
            </div>
            <div class="right md:w-1/2 p-4">
                <h2 class="bold text-5xl font-bold pb-2">
                    PACK YOUR BAGS
                </h2>
                <p class="text-sm p-4">
                    Pack your bags and get ready for an adventure of a life time. Offering over <span
                        class="text-orange-500 font-bold">100 sports and
                        adventure activities</span> at over <span class="text-orange-500 font-bold">500 locations
                        nationwide</span>. Either you are a
                    <b>solo traveler</b>, traveling with <b>family, friends or colleagues</b> looking for a
                    <span>weekend getaway</span>, or a group of female friends looking for <span>girls exclusive
                        getaways</span>, or a company looking for a <span>corporate adventure retreat</span>, we
                    have something for everyone.
                </p>
                <a href="#"
                    class="bg-gray-900 hover:bg-orange-500 text-white px-4 py-2 rounded-md transition duration-300 ease-in-out">View
                    Best Deals</a>
                <img src="https://travelandtours.pk/wp-content/uploads/2020/05/1.jpg" alt=""
                    class="max-w-[80vw] md:max-w-[20rem] m-4">
            </div>
        </div>
    </section>


    <x-container>
        <div class="text-center">
            <h2 class="bold text-2xl font-bold border-b border-gray-300 pb-2">Designed for you</h2>
        </div>


        <div
            class="designedplans grid place-items-center grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-8 p-6 rounded-xl shadow-md">
            @foreach ([['title' => 'Weekend Getaways', 'link' => '#'], ['title' => 'Micro Adventures', 'link' => '#'], ['title' => 'Girls Weekend Club', 'link' => '#'], ['title' => 'Corporate Adventure Retreat', 'link' => '#']] as $plan)
                <div class="designplan bg-no-repeat bg-cover w-full h-[200px] grid place-items-end rounded-lg overflow-hidden transition-transform transform hover:scale-105"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), url(http://travelandtours.pk/wp-content/uploads/2020/05/weekend.jpg?id=1634);">
                    <h3
                        class="text-center p-4 text-white bg-opacity-75 bg-black no-underline text-1.5xl inline-block w-full text-shadow-md">
                        <a href="{{ $plan['link'] }}" class="hover:text-orange-500 transition-colors duration-300">
                            {{ $plan['title'] }}
                        </a>
                    </h3>
                </div>
            @endforeach
        </div>
    </x-container>

    <x-container>
        <div class="tour_form_section grid place-items-center mt-8 text-white bg-cover bg-no-repeat bg-center rounded-lg lg:p-16 p-4"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://travelandtours.pk/wp-content/uploads/2020/05/iStock-537458148.jpg?id=1671');">
            <h2 class="text-3xl font-bold pb-2">Arrange Tours with us!</h2>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro et in iure eaque pariatur a distinctio
                eos perferendis recusandae eveniet officia quisquam debitis molestias fugiat architecto hic corrupti,
                delectus aliquid minima ab. Eos accusantium sit earum, itaque qui nobis, harum, voluptatibus voluptatem
                veniam voluptates incidunt adipisci minus libero placeat ipsa?
            </p>
            <div class="buttons flex flex-col md:flex-row gap-2 p-4 w-full sm:w-3/4 justify-center">
                <a href="{{ route('book-a-tour') }}"
                    class="btn inline-block px-4 py-2 text-lg font-semibold rounded-lg bg-[#fe7200] text-white transition duration-300 hover:bg-[#454545] md:w-auto w-full"
                    data-bs-toggle="modal" onclick="showjointourmodal()">
                    Book a Tour
                </a>
                <a href="{{ route('tour.make') }}"
                    class="btn inline-block px-4 py-2 text-lg font-semibold rounded-lg bg-[#fe7200] text-white transition duration-300 hover:bg-[#454545] md:w-auto w-full">
                    Make Your Own Tour
                </a>
            </div>
        </div>
        {{-- <x-dialogs.dialog1 id="joinatour">
            <x-slot:title>
                Book a Tour
            </x-slot:title>

            <p style="font-size: .7rem; color: #ff9100;">Includes trip to Abu Dhabi, Dubai, Sharja, Al-Ain.</p>
            <x-dialogs.form id="travelForm2">
                <x-dialogs.input-text id="name" placeholder="Name">
                    Name:
                </x-dialogs.input-text>
                <x-dialogs.input-text id="email" placeholder="Email">
                    Email:
                </x-dialogs.input-text>
                <x-dialogs.input-text id="whatsapp" placeholder="WhatsApp">
                    WhatsApp:
                </x-dialogs.input-text>
                <x-dialogs.input-date id="start" placeholder="start">
                    From:
                </x-dialogs.input-date>
                <x-dialogs.input-select id="package" label="Select how many days you want to tour?">
                    <option value="1">3 nights 4 days</option>
                    <option value="2">4 nights 5 days</option>
                    <option value="3">5 nights 6 days</option>
                    <option value="4">6 nights 7 days</option>
                </x-dialogs.input-select>
                <div class="flex justify-end items-center p-4">
                    <button type="reset" class="btn btn-secondary">reset</button>
                    <button type="submit" class="btn btn-primary">Inquire for Booking</button>
                </div>
            </x-dialogs.form>
        </x-dialogs.dialog1>
        <x-dialogs.dialog1 id="maketourmodal">
            <x-slot:title>
                Customize your Tour
            </x-slot:title>

            <p style="font-size: .7rem; color: #ff9100;">Includes trip to Abu Dhabi, Dubai, Sharja and Al-Ain.</p>
            <x-dialogs.form id="travelForm">
                <div class="step" id="step1">
                    <h2>Step 1: Your Information</h2>
                    <x-dialogs.input-text id="name" placeholder="Name">
                        Name:
                    </x-dialogs.input-text>

                    <x-dialogs.input-text id="email" placeholder="Email">
                        Email:
                    </x-dialogs.input-text>

                    <x-dialogs.input-text id="whatsapp" placeholder="WhatsApp">
                        WhatsApp:
                    </x-dialogs.input-text>

                    <button type="button" onclick="nextStep(1)" class="btn btn-primary">Next</button>
                </div>


                <div class="step" id="step2" style="display:none;">
                    <h2>Step 2: Travel Details</h2>
                    <x-dialogs.input-date id="start" placeholder="start">
                        From:
                    </x-dialogs.input-date>

                    <label for="cities">Select Cities:</label>
                    <div>
                        <input type="checkbox" id="city1" name="cities[]" value="city1">
                        <label for="city1"> City 1</label><br>
                        <input type="checkbox" id="city2" name="cities[]" value="city2">
                        <label for="city2"> City 2</label><br>
                        <input type="checkbox" id="city3" name="cities[]" value="city3">
                        <label for="city3"> City 3</label><br>
                    </div>

                    <button type="button" onclick="nextStep(2)" class="btn btn-primary">Next</button>
                    <button type="button" onclick="prevStep(2)" class="btn btn-secondary">Back</button>
                </div>

                <div class="step" id="step3" style="display:none;">
                    <h2>Step 3: Attractions</h2>
                    <label for="attractions">What attractions would you like to visit?</label>
                    <textarea id="attractions" rows="4" required></textarea>

                    <button type="submit" class="btn btn-primary">Inquire for Custom Package</button>
                    <button type="button" onclick="prevStep(3)" class="btn btn-secondary">Back</button>
                </div>

            </x-dialogs.form>
        </x-dialogs.dialog1>
        <script>
            let joinatour = document.getElementById('joinatour');
            let maketourmodal = document.getElementById('maketourmodal');

            function showjointourmodal() {
                joinatour.setAttribute('open', '');
            }

            function showmaketourmodal() {
                maketourmodal.setAttribute('open', '');
            }
        </script>
        <script>
            document.querySelectorAll('.btn-close').forEach(el => {
                el.addEventListener('click', (e) => {
                    e.currentTarget.closest('dialog').close();
                });
            });
        </script>
        <script>
            // document.getElementById('openDialog').addEventListener('click', () => {
            //     const dialog = document.getElementById('travelDialog');
            //     dialog.showModal();
            //     document.getElementById('step1').style.display = 'block';
            // });

            function nextStep(currentStep) {
                document.getElementById(`step${currentStep}`).style.display = 'none';
                document.getElementById(`step${currentStep + 1}`).style.display = 'block';
            }

            function prevStep(currentStep) {
                document.getElementById(`step${currentStep}`).style.display = 'none';
                document.getElementById(`step${currentStep - 1}`).style.display = 'block';
            }

            document.getElementById('travelForm').addEventListener('submit', (event) => {
                event.preventDefault(); // Prevent form submission for demo purposes
                alert("Form submitted!");
                document.getElementById('travelDialog').close();
            });
        </script> --}}

    </x-container>
</x-layout>
