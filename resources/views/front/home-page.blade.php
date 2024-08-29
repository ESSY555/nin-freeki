@extends('Layout.navbar')
@section('content')

<div class=" mt-[100px]">
    <div class="bg-gray-100 flex items-center justify-center h-[24rem] -mt-8">
        <div class="w-full h-full relative">
            <img id="slider1" src="{{ asset('images/solar1.jpg') }}" alt="Image 1" class="slider w-full h-full object-cover rounded-lg shadow-lg opacity-100 scale-100 transition-opacity transition-transform duration-1000 ease-in-out transform">
            <img id="slider2" src="{{ asset('images/nin1.JPG') }}" alt="Image 2" class="slider w-full h-full object-cover rounded-lg shadow-lg opacity-0 scale-90 transition-opacity transition-transform duration-1000 ease-in-out transform absolute top-0 left-0">
        </div>
    </div>
<div class="bg-[rgb(227,248,254)] py-5">
<div class="w-11/12 m-auto">
    <div class="flex flex-wrap justify-between gap-5 md:gap-0">
        <div class="w-full md:w-1/2">
            <p class="font-bold text-[18px]">Empower your teams with NIN and Solar Solutions:</p>
            <p>Enhance efficiency by integrating our solutions directly into your workflow.</p>
            <p>Our NIN solutions ensure secure and streamlined identification processes, reducing fraud and increasing reliability.</p>
            <p>Leverage our advanced solar solutions to harness clean energy, reduce costs, and promote sustainability within your organization.</p>
            <p>Join a community of forward-thinking businesses that prioritize innovation and environmental responsibility.</p>
           <a href="{{ route('booking.section') }}"> <button type="button" class="text-white mt-5 bg-[rgb(254,73,44)] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
           </a>
        </div>

        <div class="w-full md:w-1/2 flex justify-center items-center">
            <img src="{{ asset('images/first-image.JPG') }}" class="w-[20rem] h-full object-contain">
        </div>
    </div>


</div>
</div>

{{-- <p>this is the main page</p> --}}
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
                        <h1 class="text-3xl font-bold mb-4 text-white">National Identification Number (NIN)</h1>
                        <p class="text-lg text-white">
                            The National Identification Number (NIN) is a set of numbers assigned to an individual upon successful enrollment.
                            It is used to match you with your biometric data and other details in the National Identity Database during verification and authentication.
                        </p>
                    </div>
                    <!-- Right Image Section -->
                    <div class="w-full lg:w-1/2 p-6">
                        <img src="{{ asset('images/solar1.jpg') }}" alt="Solar Panel" class="w-full md:h-[350px] rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </div>

  <div class="w-11/12 m-auto overflow-hidden bg-cover bg-center mt-5 h-[10rem]" style="background-image: url('{{ asset('images/lady-holding-nin.JPG') }}');">
    <marquee id="imageMarquee" behavior="scroll" direction="left" scrollamount="10">
        <img src="{{ asset('images/lady-holding-nin.JPG') }}" alt="Image 1" class="inline-block rounded-lg shadow-lg mx-2 h-[10rem] w-[18rem] marquee-image">
        <img src="{{ asset('images/solar1.jpg') }}" alt="Image 2" class="inline-block rounded-lg shadow-lg mx-2 h-[10rem] w-[18rem] marquee-image">
        <img src="{{ asset('images/nin1.JPG') }}" alt="Image 3" class="inline-block rounded-lg shadow-lg mx-2 h-[10rem] w-[18rem] marquee-image">
        <img src="{{ asset('images/first-image.JPG') }}" alt="Image 4" class="inline-block rounded-lg shadow-lg mx-2 h-[10rem] w-[18rem] marquee-image">
        <img src="{{ asset('images/solar1.jpg') }}" alt="Image 5" class="inline-block rounded-lg shadow-lg mx-2 h-[10rem] w-[18rem] marquee-image">
    </marquee>
</div>
<script>
    // Select the marquee element
    const marquee = document.getElementById('imageMarquee');

    // Select all images with the class marquee-image
    const images = document.querySelectorAll('.marquee-image');

    // Function to stop the marquee
    function stopMarquee() {
        marquee.stop();
    }

    // Function to start the marquee
    function startMarquee() {
        marquee.start();
    }

    // Add event listeners to each image
    images.forEach(image => {
        image.addEventListener('mouseover', stopMarquee);
        image.addEventListener('mouseout', startMarquee);
    });
</script>


    <div class="flex flex-wrap justify-between w-11/12 m-auto gap-4 mt-5">
        <div class="bg-gray-300 p-3 text-center flex-1 rounded">
            <p class="font-bold text-[30px]">92%</p>
            <p>NIN Verification Reliability</p>
        </div>
        <div class="bg-gray-300 p-3 text-center flex-1 rounded">
            <p class="font-bold text-[30px]">+30%</p>
            <p>Customer Satisfaction</p>
        </div>
        <div class="bg-gray-300 p-3 text-center flex-1 rounded">
            <p class="font-bold text-[30px]">100%</p>
            <p>Energy Savings</p>
        </div>
        <div class="bg-gray-300 p-3 text-center flex-1 rounded">
            <p class="font-bold text-[30px]">100%</p>
            <p>Installation Success</p>
        </div>
    </div>


    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 w-11/12 m-auto mt-5">
        <!-- Solar-related Item 1 -->
        <div class="bg-[rgb(254,73,44)] rounded-lg text-white shadow">
            <img src="{{ asset('images/hand NIN.JPG') }}" alt="Solar Panel" class="w-full md:h-[350px] rounded-lg shadow-lg">
            {{-- <p class="font-bold text-[30px]">Solar Power Benefits</p>
            <p>Discover how solar energy can reduce your electricity bills and carbon footprint.</p> --}}
        </div>
        <!-- Solar-related Item 2 -->
        <div class="bg-[rgb(246,246,246)] rounded-lg shadow">
            <img src="{{ asset('images/telecommunication.jpg') }}" alt="Solar Panel" class="w-full md:h-[350px] rounded-lg shadow-lg">
            {{-- <h2 class="font-bold text-[30px]">Solar Panel Installation</h2>
            <p>Learn about the process of installing solar panels and what to expect.</p> --}}
        </div>
        <!-- Non-solar-related Item 1 -->
        <div class="bg-[rgb(246,246,246)] rounded-lg shadow">
            <img src="{{ asset('images/energy renewal.jpg') }}" alt="Solar Panel" class="w-full md:h-[350px] rounded-lg shadow-lg">
            {{-- <h2 class="font-bold text-[30px]">NIN Application Requirements</h2>
            <p>Understand the documents and prerequisites needed for a successful National Identification Number (NIN) application.</p> --}}
        </div>
        <!-- NIN-related Item 2 -->
        <div class="bg-[rgb(254,73,44)] rounded-lg p-[50px] text-white shadow">
            <h2 class="font-bold text-[30px]">NIN Lost or Stolen Procedures</h2>
            <p>Find out what to do if your National Identification Number (NIN) card is lost or stolen.</p>
        </div>

    </div>
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

</script>



</div>




@endsection
