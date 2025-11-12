<nav x-data="{ open: false }" class="nav-header sticky flex items-center justify-between h-20 text-white">
    <div class="flex flex-row items-center ml-[3rem]">
        <img src="{{ asset('images/logo.png') }}" width="80" height="80" class="w-[5rem]" />
        <a href="#" class="text-xl font-bold font-rouge">Paramendo
        </a>
    </div>

    <div class="flex items-center h-full">
        <div class="h-full">
            <ul class="hidden lg:flex flex-grow h-full justify-end items-center space-x-6 lg:space-x-8">
                <li><a href="#" class="hover:text-amber-300 transition duration-300 px-3 py-8">Home</a></li>
                <li><a href="#" class="hover:text-amber-300 transition duration-300 px-3 py-8">Rooms</a></li>
                <li><a href="#" class="hover:text-amber-300 transition duration-300 px-3 py-8">About</a></li>
                <li><a href="#" class="hover:text-amber-300 transition duration-300 px-3 py-8">Blog</a></li>
                <li><a href="#" class="hover:text-amber-300 transition duration-300 px-3 py-8">Contact Us</a></li>
            </ul>
        </div>

        <div class="hidden lg:flex h-full items-center ml-8 bg-orange-400/50 hover:bg-orange-400 transition duration-300 ">
            <a href="#" class="px-11 py-8">Book Now</a>
        </div>

        <button @click="open = !open" class="lg:hidden p-4 mr-2 focus:outline-none" >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>



   <div x-show="open"
   x-transition:enter="transition ease-out duration-300"
   x-transition:enter-start="opacity-0 translate-x-full"
   x-transition:enter-end="opacity-100 translate-x-0"
   x-transition:leave="transition ease-in duration-300"
   x-transition:leave-start="opacity-100 translate-x-0"
   x-transition:leave-end="opacity-0 translate-x-full"
   @click.away="open = false"
   class="fixed top-0 right-0 w-64 h-full bg-[#382A22] text-white shadow-xl lg:hidden px-6 pt-6"
   x-cloak>
        <div class="flex justify-end">
            <button @click="open = false" class="focus:outline-none p-2 text-white hover:text-orange-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <ul class="space-y-6 text-xl font-medium mt-10">
            <li><a href="#" @click="open = false" class="block py-3 px-2 border-b border-white/10 hover:text-orange-400 transition duration-200">Home</a></li>
            <li><a href="#" @click="open = false" class="block py-3 px-2 border-b border-white/10 hover:text-orange-400 transition duration-200">Rooms</a></li>
            <li><a href="#" @click="open = false" class="block py-3 px-2 border-b border-white/10 hover:text-orange-400 transition duration-200">About</a></li>
            <li><a href="#" @click="open = false" class="block py-3 px-2 border-b border-white/10 hover:text-orange-400 transition duration-200">Blog</a></li>
            <li><a href="#" @click="open = false" class="block py-3 px-2 border-b border-white/10 hover:text-orange-400 transition duration-200">Contact Us</a></li>

            <li class="pt-8">
                <a href="#" @click="open = false" class="block text-center py-3 bg-orange-500 hover:bg-orange-600 rounded-lg transition duration-200 font-bold shadow-lg">Book Now</a>
            </li>
        </ul>
    </div>

</nav>
