<x-layout>
    <x-container>

    </x-container>
    <x-container>

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <ul class="list-disc pl-4">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="" method="post">
            @csrf
            <form action="{{ route('book-a-tour.req') }}" method="post" class="bg-white rounded-md shadow-md p-8 max-w-md">
                @csrf
                <h2 class="bold text-2xl font-bold border-b border-gray-300 pb-2">Book a Tour</h2>

                <p class="text-orange-500 italic">Includes trip to Abu Dhabi, Dubai, Sharja, Al-Ain.</p>
                <p class="text-orange-500 italic">You just have to fill out the form & we will get back to you soon.</p>


                <div class="mb-3">
                    <label for="name" class="form-label block text-sm font-bold mb-2">Name:</label>
                    <input type="text"
                        class="form-control block w-full px-4 py-2 text-sm text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                        id="name" name="name" placeholder="Name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label block text-sm font-bold mb-2">Email:</label>
                    <input type="email"
                        class="form-control block w-full px-4 py-2 text-sm text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                        id="email" name="email" placeholder="Email" required>
                </div>

                <div class="mb-3">
                    <label for="whatsapp" class="form-label block text-sm font-bold mb-2">WhatsApp:</label>
                    <input type="text"
                        class="form-control block w-full px-4 py-2 text-sm text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                        id="whatsapp" name="whatsapp" placeholder="WhatsApp" required>
                </div>

                <div class="mb-3">
                    <label for="start" class="form-label block text-sm font-bold mb-2">From:</label>
                    <input type="date"
                        class="form-control block w-full px-4 py-2 text-sm text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                        id="start" name="start" placeholder="start" required>
                </div>

                <div class="mb-3">
                    <label for="package" class="form-label block text-sm font-bold mb-2">Select how many days you want
                        to tour:</label>
                    <select name="package" id="package"
                        class="form-control block w-full px-4 py-2 text-sm text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                        required>
                        <option value="3 nights 4 days">3 nights 4 days</option>
                        <option value="4 nights 5 days">4 nights 5 days</option>
                        <option value="5 nights 6 days">5 nights 6 days</option>
                        <option value="6 nights 7 days">6 nights 7 days</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="suggestions" class="form-label block text-sm font-bold mb-2">Any suggestions or preferences?</label>
                    <textarea id="suggestions" name="suggestions"
                        class="form-control block w-full px-4 py-2 text-sm text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                        rows="4"></textarea>
                </div>
                <div class="flex justify-end items-center p-4">
                    <button type="reset"
                        class="bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">Reset</button>
                    <button type="submit"
                        class="bg-orange-500 text-white font-bold py-2 px-4 ml-2 rounded hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">Inquire
                        for Booking</button>
                </div>
            </form>
        </form>
    </x-container>

</x-layout>
