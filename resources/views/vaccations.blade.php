<x-layout>
    <header
        class="bg-cover bg-no-repeat bg-fixed h-[80vh] text-center text-white text-1.7xl flex flex-col justify-center items-center bg-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.408), rgba(0, 0, 0, 0.743)),url('{{ asset('asset/images/youth-connect-tours.jpg') }}');">
        <div class="text">
            <h2 class="text-3xl font-bold">Vacations</h2>
        </div>
    </header>
    
    <x-container>
        <!-- Weekend Getaways -->
        <div class="head text-center">
            <h2 class="bold text-2xl font-bold border-b border-gray-300 pb-2">Vacations</h2>
            {{-- <p class="text-center"><a href="{{ route('vaccations') }}"
                    class="no-underline text-[#fe7200] hover:underline">View All Popular Attractions</a></p> --}}
        </div>
        <div class="getaways grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mt-2">

            @forelse ($attractions as $attraction)
                <x-cards.card-3
                    img="{{ asset('uploads/' . str_replace('http://localhost/travelandtours_new/public/', '', $attraction->display_picture)) }}">
                    <div class="txt">
                        <h3>{{ $attraction->name }}</h3>
                        <p>{{ $attraction->destination->name }}</p>
                        <p>5 star Rating</p>
                        <button>Book Now</button>
                    </div>
                </x-cards.card-3>
            @empty
                Coming Soon
            @endforelse

        </div>
    </x-container>


</x-layout>
