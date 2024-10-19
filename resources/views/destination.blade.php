<x-layout>

    <header
        class="bg-cover bg-no-repeat bg-fixed h-[80vh] text-center text-white text-1.7xl flex flex-col justify-center items-center bg-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.408), rgba(0, 0, 0, 0.743)),url('{{ asset('asset/images/youth-connect-tours.jpg') }}');">
        <div class="text">
            <h2 class="text-3xl font-bold">Destinations</h2>
        </div>
    </header>

    <x-container>
        <!-- Weekend Getaways -->

        <div class="head text-center">
            <h2 class="bold text-2xl font-bold border-b border-gray-300 pb-2">Destinations</h2>
            {{-- <p class="text-center"><a href="{{ route('vaccations') }}"
                    class="no-underline text-[#fe7200] hover:underline">View All Popular Attractions</a></p> --}}
        </div>

        <div class="getaways grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mt-2">
            @forelse ($destinations as $destination)
                {{-- <x-cards.card-3
                    img="{{ $destination->image ? asset('uploads/' . $destination->image) : '{{ asset('asset/images/camels.jpg') }}' }}"
                    class="group relative hover:shadow-md hover:scale-105 transition duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-75 transition duration-300"></div>
                    <div class="txt absolute inset-0 flex flex-col justify-center items-center text-white">
                        <h3 class="text-2xl">{{ $destination->name }}</h3>
                        <p class="text-lg">{{ $destination->ideal_time_to_visit }}</p>
                        <p class="text-lg">{{ $destination->ideal_time_period }} Days</p>
                        <a class="btn mt-4 group-hover:text-white" href="{{ route('dashboard.destination.show', $destination->id) }}">Book Now</a>
                    </div>
                </x-cards.card-3> --}}

                <x-cards.card-3
                    class="group relative bg-gray-800 hover:shadow-md hover:scale-105 transition duration-300"
                    img="{{ $destination->image ? asset('uploads/' . $destination->image) : asset('asset/images/camels.jpg') }}">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-30 group-hover:bg-opacity-75 transition duration-300">
                    </div>
                    <div class="txt absolute inset-0 flex flex-col justify-center items-center text-white">
                        <h3 class="text-2xl font-bold">{{ $destination->name }}</h3>
                        <p class="text-lg">{{ $destination->ideal_time_to_visit }}</p>
                        <p class="text-lg">{{ $destination->ideal_time_period }} Days</p>
                        <a href="{{ route('tour.make') }}"
                            class="btn mt-4 group-hover:text-white bg-orange-500 hover:bg-orange-700 py-2 px-3 rounded-md">Book
                            Now</a>
                    </div>
                </x-cards.card-3>
            @empty
                Coming Soon!
            @endforelse

        </div>
        {{-- <div class="getaways">
            <x-cards.card-3
                img="{{ asset('asset/images/camels.jpg') }}">
                <div class="txt">
                    <h3>Dubai</h3>
                    <p>Jan - Dec</p>
                    <p>2 days</p>
                    <button>Book Now</button>
                </div>
            </x-cards.card-3>
            <x-cards.card-3
                img="{{ asset('asset/images/camels.jpg') }}">
                <div class="txt">
                    <h3>Sharjha</h3>
                    <p>Jan - Dec</p>
                    <p>2 days</p>
                    <button>Book Now</button>
                </div>
            </x-cards.card-3>
            <x-cards.card-3
                img="{{ asset('asset/images/camels.jpg') }}">
                <div class="txt">
                    <h3>Abu Dhabi</h3>
                    <p>Jan - Dec</p>
                    <p>2 days</p>
                    <button>Book Now</button>
                </div>
            </x-cards.card-3>
            <x-cards.card-3
                img="{{ asset('asset/images/camels.jpg') }}">
                <div class="txt">
                    <h3>Al Ain</h3>
                    <p>Jan - Dec</p>
                    <p>2 days</p>
                    <button>Book Now</button>
                </div>
            </x-cards.card-3>


        </div> --}}
    </x-container>


</x-layout>
