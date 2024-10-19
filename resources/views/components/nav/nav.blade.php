
<!-- component -->

    <nav x-data="{ open: false }" class="flex h-auto w-full fixed z-50  rounded-lg justify-between
        md:h-16 bg-slate-200 md:bg-transparent">
        <div class="flex w-full justify-between content-center">
            <div :class="open ? 'hidden' : 'flex'"
                class="flex px-6 w-1/2 items-center font-semibold
            md:w-1/5 md:px-1 md:flex md:items-center md:justify-center"
                x-transition:enter="transition ease-out duration-300">
                <a href="{{ route('home') }}" class="flex"><img src="{{ asset('asset/images/logo.png') }}" alt="" class="h-[5rem] w-auto"><img src="{{ asset('asset/images/cname.png') }}" alt="Youth connect tours logo"
                    class="h-[5rem] w-auto" /></a>
            </div>

            <div x-show="open" x-transition:enter="transition ease-in-out duration-300"
                class="flex flex-col w-full h-auto md:hidden">
                <div class="grid w-full items-center justify-center gap-1 mt-8 mb-2">
                    {{-- <a href="">Home</a>
                    <a href="">About Us</a>
                    <a href="">Products</a>
                    <a href="">Contact</a> --}}
                    {{ $slot }}
                </div>
            </div>
            <div class="hidden items-center font-semibold md:flex">
                {{ $slot }}
            </div>
            <button
                class="text-gray-500 w-10 relative focus:outline-none 
                            md:hidden
                          "
                @click="open = !open">
                <span class="sr-only">Open main menu</span>
                <div class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
                    <span aria-hidden="true"
                        class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out"
                        :class="{ 'rotate-45': open, ' -translate-y-1.5': !open }"></span>
                    <span aria-hidden="true"
                        class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out"
                        :class="{ 'opacity-0': open }"></span>
                    <span aria-hidden="true"
                        class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out"
                        :class="{ '-rotate-45': open, ' translate-y-1.5': !open }"></span>
                </div>
            </button>
        </div>
    </nav>


