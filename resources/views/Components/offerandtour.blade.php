<div class="offerandtours justify-center items-center grid grid-cols-12 gap-1 mt-4">
    <div class="tours w-full col-span-12 lg:col-span-8 md:col-span-8 xl:col-span-8 grid gap-2">
        {{ $tour }}
    </div>
    @if (isset($popular))
        <div class="offers col-span-12 lg:col-span-4 md:col-span-4 xl:col-span-4 px-3 flex flex-col gap-4">
            <h2 class="bold text-2xl font-semibold border-b border-gray-300 pb-2">Popular</h2>
            {{ $popular }}
        </div>
    @endif
</div>
