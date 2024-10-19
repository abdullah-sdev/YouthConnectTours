<dialog id="{{ $id }}">

<div class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10 bg-white p-4 rounded-md shadow-md w-full max-w-md">
    <div class="flex justify-between items-center border-b border-gray-300 pb-2">
        <h5 class="text-lg font-semibold">
            {{ $title }}
        </h5>
        <button type="button" class="text-gray-600 hover:text-gray-900 transition duration-150 ease-in-out focus:outline-none" onclick="">
            <svg class="h-4 w-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
    </div>
    <div class="py-2">
        {{-- <p>Modal body text goes here.</p> --}}
        {{ $slot }}
    </div>
   
</div>


