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
                            class="p-2 border border-gray-300 rounded" required>
                            From:
                        </x-dialogs.input-date>

                        <h3 class="block text-gray-700">Select States:</h3>
                        <div id="state-checkboxes" class="space-y-2">
                            @foreach ($states as $state)
                                <div>
                                    <input type="checkbox" id="state{{ $state->id }}" name="states[]"
                                        value="{{ $state->id }}" onchange="showAttractions()">
                                    <label for="state{{ $state->id }}" class="ml-2">{{ $state->name }}</label>
                                </div>
                            @endforeach
                        </div>

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
                    <p>States: {{ implode(', ', $states->whereIn('id', old('states', []))->pluck('name')->toArray()) }}
                    </p>
                    <p>Attractions: {{ implode(', ', $attractions->whereIn('id', old('attractions', []))->pluck('name')->toArray()) }}</p>

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
        const stateNames = @json($states->keyBy('id')->map(function ($state) {
            return $state->name;
        }));
    
        async function showAttractions() {
            const selectedStates = Array.from(document.querySelectorAll('input[name="states[]"]:checked')).map(input => input.value);
            const attractionList = document.getElementById('attraction-list');
            attractionList.innerHTML = '';
    
            if (selectedStates.length) {
                document.getElementById('attractions').classList.remove('hidden');
    
                for (const stateId of selectedStates) {
                    const response = await fetch(`{{ env('APP_ASSET') }}api/attractions/${stateId}`);
                    const attractions = await response.json();
    
                    // Get the state name from the mapping
                    const stateName = stateNames[stateId]; // This will now correctly access the state name
                    const stateHeader = document.createElement('h4');
                    stateHeader.className = 'font-bold mt-4';
                    stateHeader.innerText = `Attractions in ${stateName}`; 
                    attractionList.appendChild(stateHeader);
    
                    attractions.forEach(attraction => {
                        attractionList.innerHTML += `
                            <div>
                                <input type="checkbox" id="attraction${attraction.id}" name="attractions[]" value="${attraction.id}">
                                <label for="attraction${attraction.id}" class="ml-2">${attraction.name}</label>
                            </div>
                        `;
                    });
                }
            } else {
                document.getElementById('attractions').classList.add('hidden');
            }
        }
    </script>
    
</x-layout>
