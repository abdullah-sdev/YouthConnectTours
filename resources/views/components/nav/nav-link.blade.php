{{-- <a href="{{ $href }}" class="{{ request()->url() == $href ? 'active bg-gray-800' : 'bg-orange-700' }} hover:bg-gray-600 text-white text-decoration-none text-sm px-6 py-2 block font-thin">{{ $slot }}</a> --}}


{{-- <a href="#" class="relative inline-block overflow-hidden perspective-400 kick">
    <span new-title="Howtokickblogger.com" class="block relative transition-transform duration-500 ease-in-out transform origin-top">
{{ $slot }}
    </span>
</a> --}}


<a href="{{ $href }}" class="relative inline-block overflow-hidden perspective-400 kick {{ request()->url() == $href ? 'active bg-gray-800' : 'bg-orange-700' }}  text-white text-decoration-none text-sm px-6 py-2 block font-thin">
    <span class="block relative transition-transform duration-500 ease-in-out transform origin-top">
        {{ $slot }}
        
    </span>
    <span class="absolute inset-0 flex items-center justify-center bg-gray-600 text-white transform translate-y-full rotate-x-90 transition-transform duration-500 ease-in-out origin-top">
        {{ $slot }}
        
    </span>
</a>