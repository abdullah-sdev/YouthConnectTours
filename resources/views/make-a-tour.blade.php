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
        <p>Step: {{ $currentStep }}</p>
        <form action="{{ route('tour.request') }}" method="POST" class="space-y-4">
            @csrf
            <h2 class="text-2xl font-bold border-b border-gray-300 pb-2">Make a Tour</h2>
            <input type="hidden" name="currentStep" value="{{ $currentStep }}">
            <!-- Step 1: Your Information -->
            @if ($currentStep == 1)
                <div id="step1" class="step">
                    <h2 class="text-2xl font-bold">Step 1: Your Information</h2>
                    <div class="grid grid-cols-1 gap-4">
                        <x-dialogs.input-text id="name" name="name" placeholder="Name"
                            class="p-2 border border-gray-300 rounded" required>
                            Name:
                        </x-dialogs.input-text>

                        <x-dialogs.input-text id="email" name="email" placeholder="Email"
                            class="p-2 border border-gray-300 rounded" required>
                            Email:
                        </x-dialogs.input-text>

                        <x-dialogs.input-text id="whatsapp" name="whatsapp" placeholder="WhatsApp"
                            class="p-2 border border-gray-300 rounded" required>
                            WhatsApp:
                        </x-dialogs.input-text>

                       
                        <button type="submit"
                            class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                            Next
                        </button>
                    </div>
                </div>
            @endif

            <!-- Step 2: Travel Details -->
            @if ($currentStep == 2)
                <div id="step2" class="step">
                    <h2 class="text-2xl font-bold">Step 2: Travel Details</h2>
                    <div class="grid grid-cols-1 gap-4">
                        <x-dialogs.input-date id="start" name="start" placeholder="Start Date"
                            class="p-2 border border-gray-300 rounded" >
                            From:
                        </x-dialogs.input-date>

                        <label for="state" class="block text-gray-700">Select a State:</label>
                        <select id="state" name="state" class="p-2 border border-gray-300 rounded" 
                            onchange="showAttractions(this.value)">
                            <option value="" disabled selected>Select a state</option>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                        </select>

                        <div id="attractions" class="hidden">
                            <h3 class="font-bold">Attractions:</h3>
                            <div id="attraction-list" class="grid grid-cols-1 gap-4"></div>
                        </div>

                        <button type="submit" name="currentStep" value="1"
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Back
                        </button>
                        <button type="submit"
                            class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                            Next
                        </button>
                    </div>
                </div>
            @endif

            <!-- Step 3: Confirm Details -->
            @if ($currentStep == 3)
                @php
                    $step1Data = session('step1_data', []);
                    $step2Data = session('step2_data', []);
                @endphp
                <div id="step3" class="step">
                    <h2 class="text-2xl font-bold">Step 3: Confirm Your Details</h2>
                    <p>Name: {{ old('name', $step1Data['name'] ?? '') }}</p>
                    <p>Email: {{ old('email', $step1Data['email'] ?? '') }}</p>
                    <p>WhatsApp: {{ old('whatsapp', $step1Data['whatsapp'] ?? '') }}</p>
                    <p>Start Date: {{ old('start', $step2Data['start'] ?? '') }}</p>
                    <p>State: {{ optional($states->find(old('state', $step2Data['state'] ?? '')))->name }}</p>
                    <p>Attractions: {{ implode(', ', old('attractions', [])) }}</p>

                    <button type="submit"
                        class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                        Inquire for Custom Package
                    </button>
                    
                    <button type="submit" name="currentStep" value="2"
                        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                        Back
                    </button>
                </div>
            @endif

        </form>
    </x-container>

    <script>
        async function showAttractions(stateId) {
            const response = await fetch(`{{ env('APP_ASSET') }}api/attractions/${stateId}`);
            const attractions = await response.json();

            const attractionList = document.getElementById('attraction-list');
            attractionList.innerHTML = '';

            if (attractions.length) {
                document.getElementById('attractions').classList.remove('hidden');
                attractions.forEach(attraction => {
                    attractionList.innerHTML += `
                        <div>
                            <input type="checkbox" id="attraction${attraction.id}" name="attractions[]" value="${attraction.id}">
                            <label for="attraction${attraction.id}" class="ml-2">${attraction.name}</label>
                        </div>
                    `;
                });
            } else {
                document.getElementById('attractions').classList.add('hidden');
            }
        }
    </script>
</x-layout>
