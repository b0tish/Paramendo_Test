@extends('layouts.frontend.app')

@section('content')

<div class="relative min-h-screen flex flex-col">
    <img src="{{ asset('images/hero-bg.jpg') }}" alt="Hero Background" width="1920" height="1080" class="absolute w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative flex-grow flex flex-col items-center justify-center text-center p-4 pt-20">
        <div class="text-s md:text-m lg:text-l text-white max-w-5xl tracking-tight">
            <p class="font-rouge text-7xl md:text-9xl tracking-wider">Escape the City</p>
            <p class="mt-4 font-garamond text-xl md:text-3xl italic font-light">Welcome to the <span class="text-amber-300">quiet</span> eco house</p>
        </div>
    </div>

    <div class="relative w-full flex justify-center -mt-20 pb-12 px-4">
        <div class="bg-white/10 backdrop-blur-md border border-white/20 p-6 md:p-8 rounded-xl shadow-2xl max-w-6xl w-full">
            <form class="grid grid-cols-2 lg:grid-cols-6 gap-4">
                <div class="col-span-2 lg:col-span-2">
                    <label for="checkin" class="text-xs font-semibold uppercase text-white/80 block mb-1">Check in Date*</label>
                    <input type="date" id="checkin" name="checkin" class="w-full text-gray-100 rounded-lg border-2 border-white/30 bg-black/20 p-3 focus:border-orange-400 focus:ring-0 outline-none transition duration-300" />
                </div>

                <div class="col-span-2 lg:col-span-2">
                    <label for="checkout" class="text-xs font-semibold uppercase text-white/80 block mb-1">Check Out Date*</label>
                    <input type="date" id="checkout" name="checkout" class="w-full text-gray-100 rounded-lg border-2 border-white/30 bg-black/20 p-3 focus:border-orange-400 focus:ring-0 outline-none transition duration-300" />
                </div>

                <div class="col-span-1">
                    <label for="adults" class="text-xs font-semibold uppercase text-white/80 block mb-1">Adults</label>
                    <input type="number" id="adults" name="adults" placeholder="2" class="w-full text-gray-100 rounded-lg border-2 border-white/30 bg-black/20 p-3 focus:border-orange-400 focus:ring-0 outline-none placeholder-gray-400" />
                </div>

                <div class="col-span-1">
                    <label for="children" class="text-xs font-semibold uppercase text-white/80 block mb-1">Children</label>
                    <input type="number" id="children" name="children" placeholder="0" class="w-full text-gray-100 rounded-lg border-2 border-white/30 bg-black/20 p-3 focus:border-orange-400 focus:ring-0 outline-none placeholder-gray-400" />
                </div>

                <div class="col-span-2 lg:col-span-6 flex items-end">
                    <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold text-lg py-3 px-6 rounded-lg transition duration-300 shadow-xl mt-4">
                        Search Availability
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<section class="bg-[#382A22] mt-10 text-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
        <div>
            <p class="font-rouge text-4xl italic text-amber-400 mb-6">A charming farmhouse</p>
            <h2 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight">
                Looking for a relaxing <span class="text-amber-400">country vacation</span> rental?
            </h2>
            <p class="text-lg text-gray-300 mb-8">
                If you're looking for a relaxing country vacation rental, our charming eco-house is the perfect place to get away from it all. Situated in the heart of the countryside, it offers tranquility, stunning views, and a commitment to sustainable living.
            </p>
            <a href="#" class="inline-block text-lg font-semibold text-amber-400 hover:text-amber-500 transition duration-300 border-b-2 border-amber-400 pb-1">
                Explore the Property
            </a>
        </div>
        <div class="h-64 md:h-96 bg-gray-700 rounded-tl-[80px] rounded-br-[80px] shadow-2xl overflow-hidden">
             <img src="{{ asset('images/scroller.jpg') }}" alt="Cottage View" width="800" height="600" loading="lazy" class="w-full h-full object-cover opacity-80 hover:opacity-100 transition duration-500"/>
        </div>
    </div>
</section>


<section class="max-w-6xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mb-16">
        <p class="font-rouge text-4xl italic text-gray-700 mb-4">Amenities & benefits</p>
        <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">
            Surrounded by nature, stunning views of the countryside.
        </h2>
        <p class="text-lg text-gray-600 mt-6">
            Our country rental offers more than just a roof—it's an experience with pools, tennis courts, and private hiking trails right on the property.
        </p>
    </div>

    <div class="grid md:grid-cols-2 gap-x-12 gap-y-10">

        <div class="flex items-start space-x-4 border-b pb-6 border-gray-100">
            <svg class="w-8 h-8 text-orange-500 flex-shrink-0 mt-1 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house-icon lucide-house"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-1">Entire Home</h3>
                <p class="text-gray-600">
                    Enjoy complete privacy—you'll have the tiny eco-house and all its surrounding grounds to yourself.
                </p>
            </div>
        </div>

        <div class="flex items-start space-x-4 border-b pb-6 border-gray-100">
            <svg class="w-8 h-8 text-orange-500 flex-shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-brush-cleaning-icon lucide-brush-cleaning"><path d="m16 22-1-4"/><path d="M19 13.99a1 1 0 0 0 1-1V12a2 2 0 0 0-2-2h-3a1 1 0 0 1-1-1V4a2 2 0 0 0-4 0v5a1 1 0 0 1-1 1H6a2 2 0 0 0-2 2v.99a1 1 0 0 0 1 1"/><path d="M5 14h14l1.973 6.767A1 1 0 0 1 20 22H4a1 1 0 0 1-.973-1.233z"/><path d="m8 22 1-4"/></svg>
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-1">Enhanced Clean</h3>
                <p class="text-gray-600">
                    We adhere to a strict 5-step enhanced cleaning process, ensuring a pristine and safe environment for your stay.
                </p>
            </div>
        </div>

        <div class="flex items-start space-x-4 border-b pb-6 border-gray-100">
            <svg class="w-8 h-8 text-orange-500 flex-shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-key-icon lucide-key"><path d="m15.5 7.5 2.3 2.3a1 1 0 0 0 1.4 0l2.1-2.1a1 1 0 0 0 0-1.4L19 4"/><path d="m21 2-9.6 9.6"/><circle cx="7.5" cy="15.5" r="5.5"/></svg>
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-1">Self Check-in</h3>
                <p class="text-gray-600">
                    Arrive on your own schedule. Check yourself in effortlessly using our secure digital lockbox system.
                </p>
            </div>
        </div>

        <div class="flex items-start space-x-4 pb-6">
            <svg class="w-8 h-8 text-orange-500 flex-shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house-wifi-icon lucide-house-wifi"><path d="M9.5 13.866a4 4 0 0 1 5 .01"/><path d="M12 17h.01"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><path d="M7 10.754a8 8 0 0 1 10 0"/></svg>
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-1">High-Speed WiFi</h3>
                <p class="text-gray-600">
                    Stay connected with our reliable fiber-optic internet, even in the middle of nature.
                </p>
            </div>
        </div>
    </div>
</section>


<div class="my-20 bg-[#382A22] p-8 md:p-16 text-white overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <p class="font-rouge text-5xl md:text-6xl text-amber-400">Paramendo Gallery</p>
        <p class="font-garamond text-xl font-light text-gray-300 mb-8">A Secret Garden in the Countryside</p>
    </div>

    <div class="owl-carousel owl-theme">
        <div class="item px-4 md:px-2"><img src="{{ asset('images/scroller.jpg') }}" alt="Gallery Image 1" width="600" height="600" loading="lazy" class="w-full aspect-square md:aspect-[4/3] object-cover rounded-xl  hover:scale-[1.02] transition duration-500"></div>
        <div class="item px-4 md:px-2"><img src="{{ asset('images/scroller1.jpg') }}" alt="Gallery Image 2" width="600" height="600" loading="lazy" class="w-full aspect-square md:aspect-[4/3] object-cover rounded-xl hover:scale-[1.02] transition duration-500"></div>
        <div class="item px-4 md:px-2"><img src="{{ asset('images/scroller2.jpg') }}" alt="Gallery Image 3" width="600" height="600" loading="lazy" class="w-full aspect-square md:aspect-[4/3] object-cover rounded-xl hover:scale-[1.02] transition duration-500"></div>
        <div class="item px-4 md:px-2"><img src="{{ asset('images/scroller3.jpg') }}" alt="Gallery Image 4" width="600" height="600" loading="lazy" class="w-full aspect-square md:aspect-[4/3] object-cover rounded-xl hover:scale-[1.02] transition duration-500"></div>
    </div>

    @push('scripts')
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                responsive:{
                    0:{
                        items:1,
                        margin: 10,
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            });
        });
    </script>
    @endpush
</div>


<div class="max-w-6xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
    <h2 class="text-4xl font-extrabold text-center text-gray-900 mb-4">
        Discover Our Services
    </h2>
    <p class="text-center text-gray-500 text-lg mb-12 max-w-2xl mx-auto">
        We offer a range of unique services designed to enhance your country getaway.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <div class="group border border-gray-200 p-8 flex flex-col items-start text-left aspect-square hover:shadow-lg hover:bg-orange-50 hover:border-orange-200 transition duration-300 rounded-lg">
            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-orange-900 mb-2">
                <span class="border-b-2 group-hover:border-orange-400 pb-1">Breakfast Service</span>
            </h3>
            <p class="text-gray-600 group-hover:text-orange-800 flex-grow">
                Start your day right! Enjoy a free, locally-sourced breakfast every morning. We also offer free high-speed wifi and fresh linens.
            </p>
        </div>

        <div class="group border border-gray-200 p-8 flex flex-col items-start text-left aspect-square hover:shadow-lg hover:bg-orange-50 hover:border-orange-200 transition duration-300 rounded-lg">
            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-orange-900 mb-2">
                <span class="border-b-2 group-hover:border-orange-400 pb-1">
                    Shuttle Service
                </span>
            </h3>
            <p class="text-gray-600 group-hover:text-orange-800 flex-grow">
                Avoid the hassle of parking and traffic. Take advantage of our complimentary shuttle service to and from the nearest town center.
            </p>
        </div>

        <div class="group border border-gray-200 p-8 flex flex-col items-start text-left aspect-square hover:shadow-lg hover:bg-orange-50 hover:border-orange-200 transition duration-300 rounded-lg">
            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-orange-900 mb-2">
                <span class="border-b-2 group-hover:border-orange-400 pb-1">
                    Laundry Facilities
                </span>
            </h3>
            <p class="text-gray-600 group-hover:text-orange-800 flex-grow">
                Convenience during long stays. There are laundry and kitchen facilities readily available for all guests to use at their leisure.
            </p>
        </div>

        <div class="group border border-gray-200 p-8 flex flex-col items-start text-left aspect-square hover:shadow-lg hover:bg-orange-50 hover:border-orange-200 transition duration-300 rounded-lg">
            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-orange-900 mb-2">
                <span class="border-b-2 group-hover:border-orange-400 pb-1">
                Local Brews & Wines
                </span>
            </h3>
            <p class="text-gray-600 group-hover:text-orange-800 flex-grow">
                Relax at our on-site bar, which proudly serves a selection of the region's finest local beers and wines
            </p>
        </div>

        <div class="group border border-gray-200 p-8 flex flex-col items-start text-left aspect-square hover:shadow-lg hover:bg-orange-50 hover:border-orange-200 transition duration-300 rounded-lg">
            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-orange-900 mb-2">
                <span class="border-b-2 group-hover:border-orange-400 pb-1">
                Guided Pub Meetup
                </span>
            </h3>
            <p class="text-gray-600 group-hover:text-orange-800 flex-grow">
                Meet fellow travelers! A guided pub crawl is organized once a week to explore the charming local pubs nearby.
            </p>
        </div>

        <div class="group border border-gray-200 p-8 flex flex-col items-start text-left aspect-square hover:shadow-lg hover:bg-orange-50 hover:border-orange-200 transition duration-300 rounded-lg">
            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-orange-900 mb-2">
                <span class="border-b-2 group-hover:border-orange-400 pb-1">
                    Personalized Map
                </span>
            </h3>
            <p class="text-gray-600 group-hover:text-orange-800 flex-grow">
                Pick up your free, personalized area map at check-in. It highlights the best hiking trails, attractions, and local secrets.
            </p>
        </div>

    </div>
</div>



<!-- Review Section -->
<div class="bg-[#382A22] text-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto text-center mb-12">
        <h2 class="text-4xl font-extrabold mb-4">What Our Guests Say</h2>
        <p class="text-lg text-gray-300">
            Hear from those who have experienced the tranquility and charm of our eco-house.
        </p>
    </div>

    <div class="max-w-4xl mx-auto grid md:grid-cols-3 gap-8">

        <div class="bg-white/10 backdrop-blur-md border border-white/20 p-6 rounded-lg shadow-lg hover">
            <p class="text-gray-200 italic mb-4">"An unforgettable stay! The eco-house was cozy and the surroundings were breathtaking. Highly recommend for a peaceful getaway."</p>
            <div class="text-sm font-bold text-orange-400">- Sarah L.</div>
        </div>

        <div class="bg-white/10 backdrop-blur-md border border-white/20 p-6 rounded-lg shadow-lg">
            <p class="text-gray-200 italic mb-4">"The perfect escape from city life. The amenities were top-notch, and the staff went above and beyond to make our stay comfortable."</p>
            <div class="text-sm font-bold text-orange-400">- Mark D.</div>
        </div>

        <div class="bg-white/10 backdrop-blur-md border border-white/20 p-6 rounded-lg shadow-lg">
            <p class="text-gray-200 italic mb-4">"A charming farmhouse with a heart for sustainability. Loved the local breakfast and the hiking trails around the property."</p>
            <div class="text-sm font-bold text-orange-400">- Emily R.</div>
        </div>

    </div>
</div>

@endsection
