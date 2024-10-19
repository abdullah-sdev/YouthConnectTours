<div class="getaway bg-[#14141453] text-white p-4 h-[300px] grid items-end shadow-md rounded-xl overflow-hidden relative" > 
    {{-- style="display: grid; align-items: end;" --}}
    <div class="absolute z-[-100] w-full h-full bg-no-repeat bg-cover bg-right-bottom transition-all duration-300"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.743)),url('{{ $img }}');">
    </div>
    {{ $slot }}
</div>
