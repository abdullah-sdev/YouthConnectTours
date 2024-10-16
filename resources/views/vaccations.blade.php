<x-layout>
    <header
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.743)),url('https://travelandtours.pk/wp-content/uploads/2019/01/neelum-valley.jpg');">
        <div class="text">
            <h2>Vacations</h2>
            {{-- <p>A perfect experience with Youth Connect Tours</p> --}}
        </div>
    </header>
    <x-container>
        <!-- Weekend Getaways -->

        <div class="head">
            <h2>Vacations</h2>
        </div>
        <div class="getaways">
            {{-- <x-cards.card-3
                img="https://travelandtours.pk/wp-content/uploads/2019/10/56d305b4c83ec8e8a1be271c314af4ff-300x300.jpg">
                <div class="txt">
                    <h3>Dubai</h3>
                    <p>Jan - Dec</p>
                    <p>2 days</p>
                    <button>Book Now</button>
                </div>
            </x-cards.card-3>
            <x-cards.card-3
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
            </x-cards.card-3>
 --}}
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
                
            @endforelse
            
        </div>
    </x-container>


</x-layout>
