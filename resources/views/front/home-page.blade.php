@extends('Layout.navbar')
@section('content')

<div class=" mt-[100px]">

    <div class="relative md:h-[24rem] mb-8 bg-cover bg-center flex items-center justify-center" style="background-image: url('{{ asset('images/solar1.jpg') }}');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Container with flex layout -->
        <div class="relative flex w-3/4 mx-auto space-x-4">
            <!-- First div: Solar Panel and Inverter -->
            <div class="w-1/2 bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold mb-4">Solar Panel, Inverter & Battery Systems</h2>
                <p class="text-black font-bold">Discover the efficiency and reliability of our solar panel, inverter, and battery systems. Our solutions ensure uninterrupted power supply, reduce your energy costs, and contribute to a sustainable future.</p>
                <a href="{{ route('solar.panel') }}" class="inline-block mt-4 px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700">Learn More</a>
            </div>

            <!-- Second div: NIN Registration -->
            <div class="w-1/2 bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold mb-4">NIN Registration</h2>
                <p class="text-black font-bold">Get your National Identification Number (NIN) registered today. Our quick and easy process ensures that you are recognized and can access government services without hassle.</p>
                <a href="{{ route('booking.section') }}" class="inline-block mt-4 px-6 py-2 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700">Register Now</a>
            </div>
        </div>


    </div>




    <div class="bg-gray-300 rounded-lg w-11/12 m-auto">
        <div>
            <div class="container mx-auto p3-6">
                <div class="flex flex-wrap lg:flex-nowrap items-center gap-6 rounded m-3">
                    <!-- Left Text Section -->
                    <div class="w-full lg:w-1/2 p-6">
                             <h1 class="text-3xl md:text-5xl font-bold mb-4">Go Solar, Go Green</h1>
            <p class="text-lg md:text-xl md:mb-6">Switch to clean energy with our state-of-the-art solar panels. Save on electricity bills and reduce your carbon footprint.</p>
            <p class="text-lg md:text-xl md:mb-6">Solar power is the most reliable and efficient source of renewable energy, allowing you to generate clean energy directly from the sun.</p>
            <p class="text-lg md:text-xl md:mb-6">By investing in solar panels, you not only contribute to a more sustainable future but also enjoy long-term savings on your energy costs.</p>

                    </div>
                    <!-- Right Image Section -->
                    <div class="w-full lg:w-1/2 p-3">
                        <img src="{{ asset('images/solar1.jpg') }}" alt="Solar Panel" class="w-full md:h-[350px] rounded-lg shadow-lg">
                    </div>
                </div>
                <div class="text-center pb-5"> <a href="{{ route('solar.panel') }}"> <button class="bg-orange-600 text-white px-4 py-2 rounded">Get Started</button></div>
                </a> </div>
        </div>
    </div>



{{-- icons part --}}
    <div class="py-6 w-11/12 m-auto -mt-5">
        <div class="w-full p-[1px] bg-gray-300 mb-2"></div>
        <div class="flex flex-wrap justify-center lg:justify-between gap-6">
            <div class="flex flex-col items-center">
                <i class="fas fa-solar-panel text-6xl text-yellow-500 mb-2"></i>
                <p class="text-center">Efficient Solar Panels</p>
            </div>
            <div class="flex flex-col items-center">
                <i class="fas fa-id-card text-6xl text-[rgb(254,73,44)] mb-2"></i>
                <p class="text-center">Secure NIN ID</p>
            </div>
            <div class="flex flex-col items-center">
                <i class="fas fa-sun text-6xl text-yellow-500 mb-2"></i>
                <p class="text-center">Renewable Energy</p>
            </div>
            <div class="flex flex-col items-center">
                <i class="fas fa-fingerprint text-6xl text-[rgb(254,73,44)] mb-2"></i>
                <p class="text-center">Biometric Verification</p>
            </div>
            <div class="flex flex-col items-center">
                <i class="fas fa-battery-full text-6xl text-yellow-500 mb-2"></i>
                <p class="text-center">High Capacity Storage</p>
            </div>
        </div>
    </div>

    <div class="bg-[rgb(254,73,44)] rounded-lg w-11/12 m-auto">
        <div>
            <div class="container mx-auto py-6">
                <div class="flex flex-wrap lg:flex-nowrap items-center gap-6 rounded m-3">
                    <!-- Left Text Section -->
                    <div class="w-full lg:w-1/2 p-6">
                        <h1 class="text-3xl font-bold mb-4 text-white text-lg md:text-xl md:mb-6">National Identification Number (NIN)</h1>
                        <p class="text-lg text-white text-lg md:text-xl md:mb-6">
                            The National Identification Number (NIN) is a set of numbers assigned to an individual upon successful enrollment.
                            It is used to match you with your biometric data and other details in the National Identity Database during verification and authentication.
                        </p>
                    </div>
                    <!-- Right Image Section -->
                    <div class="w-full lg:w-1/2 p-6">
                        <img src="{{ asset('images/nin1.JPG') }}" alt="Solar Panel" class="w-full md:h-[350px] rounded-lg shadow-lg">
                    </div>
                </div>
                <div class="text-center"> <a href="{{ route('nin.page') }}"> <button class="bg-gray-400 text-white px-4 py-2 rounded">Get Started</button></a></div>
            </div>
        </div>
    </div>

    {{-- <div class="w-11/12 m-auto overflow-hidden bg-cover bg-center mt-5 h-[10rem]" style="background-image: url('{{ asset('images/lady-holding-nin.JPG') }}');">
        <marquee id="imageMarquee" behavior="scroll" direction="left" scrollamount="10">
            <img src="{{ asset('images/lady-holding-nin.JPG') }}" alt="Image 1" class="inline-block rounded-lg shadow-lg mx-2 h-[10rem] w-[18rem] marquee-image">
            <img src="{{ asset('images/solar1.jpg') }}" alt="Image 2" class="inline-block rounded-lg shadow-lg mx-2 h-[10rem] w-[18rem] marquee-image">
            <img src="{{ asset('images/nin1.JPG') }}" alt="Image 3" class="inline-block rounded-lg shadow-lg mx-2 h-[10rem] w-[18rem] marquee-image">
            <img src="{{ asset('images/first-image.JPG') }}" alt="Image 4" class="inline-block rounded-lg shadow-lg mx-2 h-[10rem] w-[18rem] marquee-image">
            <img src="{{ asset('images/solar1.jpg') }}" alt="Image 5" class="inline-block rounded-lg shadow-lg mx-2 h-[10rem] w-[18rem] marquee-image">
        </marquee>
    </div> --}}



</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        let currentIndex = 0;
        const images = [
            document.getElementById('slider1'),
            document.getElementById('slider2')
        ];

        setInterval(() => {
            // Hide the current image and zoom out
            images[currentIndex].classList.add('opacity-0', 'scale-90');
            images[currentIndex].classList.remove('opacity-100', 'scale-100');

            // Move to the next image after the transition duration
            setTimeout(() => {
                currentIndex = (currentIndex + 1) % images.length;

                // Show the next image and zoom in
                images[currentIndex].classList.remove('opacity-0', 'scale-90');
                images[currentIndex].classList.add('opacity-100', 'scale-100');
            }, 100); // Adjust this to match the transition duration
        }, 3000); // 6 seconds for the entire transition cycle
    });
    // JavaScript to reset animation for infinite scroll effect
    const carousel = document.querySelector('.carousel');

    carousel.addEventListener('animationiteration', () => {
        // Reset animation to keep scrolling infinitely
        carousel.style.animation = 'none';
        carousel.offsetHeight; // Trigger reflow
        carousel.style.animation = null;
    });

    // Select the marquee element
    const marquee = document.getElementById('imageMarquee');
    const images = document.querySelectorAll('.marquee-image');

    // Function to make the marquee full screen
    function makeFullScreen() {
        marquee.style.width = '100vw';
        marquee.style.height = '100vh';
    }

    // Stop marquee on hover
    function stopMarquee() {
        marquee.stop();
    }

    // Start marquee and reset to full screen
    function startMarquee() {
        makeFullScreen();  // Ensure full-screen size whenever it starts
        marquee.start();
    }

    // Apply full screen on page load
    window.addEventListener('load', makeFullScreen);

    // Add event listeners for hover effect
    images.forEach(image => {
        image.addEventListener('mouseover', stopMarquee);
        image.addEventListener('mouseout', startMarquee);
    });</script>



</div>




@endsection
