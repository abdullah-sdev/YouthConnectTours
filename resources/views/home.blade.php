<x-layout>
    <header
        class="bg-cover bg-no-repeat bg-fixed h-[80vh] text-center text-white text-1.7xl"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.408), rgba(0, 0, 0, 0.743)),url('{{ asset('asset/images/youth-connect-tours.jpg') }}');">
        <div class="text">
            <h2 class="text-3xl font-bold">Youth Connect Tours</h2>
            <p>A Journey to Adventurous & Discover Amazing Places at Exclusive Deals</p>
        </div>
    </header>
    <x-container>
        <div class="head">
            <h2>Explore our top offers</h2>
            <p><a href="{{ route('vaccations') }}">View All Popular Attractions</a></p>
        </div>

        <x-offerandtour>
            <x-slot:tour>
                @forelse ($attractions as $attraction)
                    <x-cards.card-1>

                        <div class="img">
                            {{-- <img src="https://picsum.photos/200/200/?travel,adventure" height="" alt=""> --}}
                            <img src="{{ env('APP_ASSET').'uploads/'.$attraction->display_picture }}"
                                alt="xx">
                            {{-- <p>{{ env('APP_ASSET').$attraction->display_picture }}</p> --}}
                        </div>
                        <div class="txt">
                            <h4>{{ $attraction->name }}</h4>
                            <span><i class="fa-solid fa-location-dot"></i>{{ $attraction->destination->name }}, UAE</span>
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
                            <a class="btn" href="{{ route('tour.detail', $attraction->slug()) }}">View</a>
                        </div>
                    </x-cards.card-1>
                @empty
                    Coming Soon!
                @endforelse

            </x-slot:tour>

            <x-slot:popular>

                <x-cards.card-2
                    style="background-image: url('{{ asset('asset/images/product-banner01.png') }}');">
                    <div class="txt">
                        <h5>Kids Adventure
                            Kidzania</h5>
                        {{-- <p>Saturdays</p>
                        <p>15 minutes</p> --}}
                        <a class="btn">Book Now</a>
                    </div>
                </x-cards.card-2>
                <x-cards.card-2
                    style="background-image: url('{{ asset('asset/images/product-banner02.png') }}'); background-size: cover; background-color: rgba(3, 146, 209, 0.3281687675);">
                    <div class="txt">
                        <h5>Theme Parks For Family</h5>
                        {{-- <p>Saturdays</p>
                        <p>15 minutes</p> --}}
                        <a class="btn">Book Now</a>
                    </div>
                </x-cards.card-2>
            </x-slot:popular>
        </x-offerandtour>

    </x-container>

    <x-container>
        <!-- Weekend Getaways -->

        <div class="head">
            <h2>Destinations</h2>
        </div>
        <div class="getaways">
            @forelse ($destinations as $destination)
                <x-cards.card-3
                    img="https://travelandtours.pk/wp-content/uploads/2019/10/56d305b4c83ec8e8a1be271c314af4ff-300x300.jpg">
                    <div class="txt">
                        <h3>{{ $destination->name }}</h3>
                        <p>{{ $destination->ideal_time_to_visit }}</p>
                        <p>{{ $destination->ideal_time_period }} Days</p>
                        {{-- <p>2 days</p> --}}
                        <a class="btn">Book Now</a>
                    </div>
                </x-cards.card-3>
            @empty
                Coming Soon!
            @endforelse

            {{-- <x-cards.card-3
                img="https://travelandtours.pk/wp-content/uploads/2019/10/56d305b4c83ec8e8a1be271c314af4ff-300x300.jpg">
                <div class="txt">
                    <h3>Sharjha</h3>
                    <p>Jan - Dec</p>
                    <p>2 days</p>
                    <button>Book Now</button>
                </div>
            </x-cards.card-3>
            <x-cards.card-3
                img="https://travelandtours.pk/wp-content/uploads/2019/10/56d305b4c83ec8e8a1be271c314af4ff-300x300.jpg">
                <div class="txt">
                    <h3>Abu Dhabi</h3>
                    <p>Jan - Dec</p>
                    <p>2 days</p>
                    <button>Book Now</button>
                </div>
            </x-cards.card-3>
            <x-cards.card-3
                img="https://travelandtours.pk/wp-content/uploads/2019/10/56d305b4c83ec8e8a1be271c314af4ff-300x300.jpg">
                <div class="txt">
                    <h3>Al Ain</h3>
                    <p>Jan - Dec</p>
                    <p>2 days</p>
                    <button>Book Now</button>
                </div>
            </x-cards.card-3> --}}


        </div>
    </x-container>


    {{-- <x-container>
        <div class="head">
            <h2>Explore our fleet</h2>
        </div>
        <div class="fleets">
            <x-cards.card-4 img="https://travelandtours.pk/wp-content/uploads/2020/05/corolla-300x300.jpg">
                <div class="vehicle">
                    <h4>Toyota Corolla Altis</h4>
                    <p>Sedans</p>
                </div>
                <div class="price">
                    <p><span>From</span> Rs 8000</p>
                </div>
                <div class="specs">
                    <div class="spec">
                        5 adults
                    </div>
                    <div class="spec">
                        2 bags
                    </div>
                    <div class="spec">
                        A/C
                    </div>
                </div>
                <button>dsadsa</button>
            </x-cards.card-4>
            <x-cards.card-4 img="https://travelandtours.pk/wp-content/uploads/2020/05/corolla-300x300.jpg">
                <div class="vehicle">
                    <h4>Toyota Corolla Altis</h4>
                    <p>Sedans</p>
                </div>
                <div class="price">
                    <p><span>From</span> Rs 8000</p>
                </div>
                <div class="specs">
                    <div class="spec">
                        5 adults
                    </div>
                    <div class="spec">
                        2 bags
                    </div>
                    <div class="spec">
                        A/C
                    </div>
                </div>
                <button>dsadsa</button>
            </x-cards.card-4>
            <x-cards.card-4 img="https://travelandtours.pk/wp-content/uploads/2020/05/corolla-300x300.jpg">
                <div class="vehicle">
                    <h4>Toyota Corolla Altis</h4>
                    <p>Sedans</p>
                </div>
                <div class="price">
                    <p><span>From</span> Rs 8000</p>
                </div>
                <div class="specs">
                    <div class="spec">
                        5 adults
                    </div>
                    <div class="spec">
                        2 bags
                    </div>
                    <div class="spec">
                        A/C
                    </div>
                </div>
                <button>dsadsa</button>
            </x-cards.card-4>
            <x-cards.card-4 img="https://travelandtours.pk/wp-content/uploads/2020/05/corolla-300x300.jpg">
                <div class="vehicle">
                    <h4>Toyota Corolla Altis</h4>
                    <p>Sedans</p>
                </div>
                <div class="price">
                    <p><span>From</span> Rs 8000</p>
                </div>
                <div class="specs">
                    <div class="spec">
                        5 adults
                    </div>
                    <div class="spec">
                        2 bags
                    </div>
                    <div class="spec">
                        A/C
                    </div>
                </div>
                <button>dsadsa</button>
            </x-cards.card-4>
            <x-cards.card-4 img="https://travelandtours.pk/wp-content/uploads/2020/05/corolla-300x300.jpg">
                <div class="vehicle">
                    <h4>Toyota Corolla Altis</h4>
                    <p>Sedans</p>
                </div>
                <div class="price">
                    <p><span>From</span> Rs 8000</p>
                </div>
                <div class="specs">
                    <div class="spec">
                        5 adults
                    </div>
                    <div class="spec">
                        2 bags
                    </div>
                    <div class="spec">
                        A/C
                    </div>
                </div>
                <button>dsadsa</button>
            </x-cards.card-4>

        </div>

    </x-container> --}}

    <!-- Advertise -->
    <section class="container"
        style="background-image: url('https://travelandtours.pk/wp-content/uploads/2020/05/iStock-537458148.jpg?id=1671');">
        <div class="advertisement">
            <div class="left">
                {{-- <div class="img">
                    <img src="https://travelandtours.pk/wp-content/uploads/2020/05/maxresdefault.jpg" alt=""
                        height="250rem" width="400rem">
                </div> --}}
                <div class="txt">
                    <h2>
                        LAST MINUTE OFFERS
                    </h2>
                </div>
            </div>
            <div class="right">
                <h2>
                    PACK YOUR BAGS
                </h2>
                <p>
                    Pack your bags and get ready for an adventure of a life time. Offering over <span>100 sports and
                        adventure activities</span> at over <span>500 locations nationwide</span>. Either you are a
                    <b>solo traveler</b>, traveling with <b>family, friends or colleagues</b> looking for a
                    <span>weekend getaway</span>, or a group of female friends looking for <span>girls exclusive
                        getaways</span>, or a company looking for a <span>corporate adventure retreat</span>, we
                    have something for everyone.
                </p>
                <a href="#">View Best Deals</a>
                <img src="https://travelandtours.pk/wp-content/uploads/2020/05/1.jpg" 
                    alt="" >
            </div>
        </div>
    </section>

    <section class="container">
        <div class="head">
            <h2>Designed for you</h2>
        </div>
        <div class="designedplans">
            <div class="designplan"
                style="background-image:  linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.743)), url(http://travelandtours.pk/wp-content/uploads/2020/05/weekend.jpg?id=1634);">
                <h3>
                    <a href="#">Weekend Getaways</a>
                </h3>
            </div>
            <div class="designplan"
                style="background-image:  linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.743)), url(http://travelandtours.pk/wp-content/uploads/2020/05/weekend.jpg?id=1634);">
                <h3>
                    <a href="#">Micro Adventures</a>
                </h3>
            </div>
            <div class="designplan"
                style="background-image:  linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.743)), url(http://travelandtours.pk/wp-content/uploads/2020/05/weekend.jpg?id=1634);">
                <h3>
                    <a href="#">Girls Weekend Club</a>
                </h3>
            </div>
            <div class="designplan"
                style="background-image:  linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.743)), url(http://travelandtours.pk/wp-content/uploads/2020/05/weekend.jpg?id=1634);">
                <h3>
                    <a href="#">Coporate Adventure Retreat</a>
                </h3>
            </div>
        </div>
    </section>

    <x-container>

        <div class="tour_form_section">
            <h2>Arrange Tours with us!</h2>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro et in iure eaque pariatur a distinctio
                eos perferendis recusandae eveniet officia quisquam debitis molestias fugiat architecto hic corrupti,
                delectus aliquid minima ab. Eos accusantium sit earum, itaque qui nobis, harum, voluptatibus voluptatem
                veniam voluptates incidunt adipisci minus libero placeat ipsa?
            </p>
            <div class="buttons">
                <button class="btn" data-bs-toggle="modal" onclick="showjointourmodal()">
                    Book a Tour
                </button>
                <button class="btn" data-bs-toggle="modal" onclick="showmaketourmodal()">
                    Make Your Own Tour
                </button>

            </div>
        </div>
        {{-- <div class="modal fade" id="jointourmodal" tabindex="-1" aria-labelledby="jointourmodalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="jointourmodalLabel">Join a Tour</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    aria-describedby="nameHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="whatsapp" class="form-label">Whatsapp</label>
                                <input type="text" class="form-control" id="whatsapp" name="whatsapp"
                                    aria-describedby="whatsappHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="instructions" class="form-label">Instructions</label>
                                <textarea class="form-control" id="instructions" name="instructions" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="tourname" class="form-label">Tour Name</label>
                                <input type="text" class="form-control" id="tourname" name="tourname"
                                    aria-describedby="tournameHelp" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        <x-dialogs.dialog1 id="joinatour">
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
                <div class="modal-footer">
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
        </script>

    </x-container>
</x-layout>
