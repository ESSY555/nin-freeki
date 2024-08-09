<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') - {{ config('app.name', 'Freeki') }}</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            .input_des {
                content-visibility: auto;
                padding: 0.5rem;
            }
}
    .bg-image {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        animation: breathe 5s ease-in-out infinite;
    }

    @keyframes breathe {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.8;
        }


         /* Additional CSS for smooth scrolling */
         .carousel {
            display: flex;
            overflow: hidden;
            white-space: nowrap;
            animation: scroll-right 20s linear infinite;
        }

        .carousel img {
            min-width: 100%;
            height: auto;
        }

        @keyframes scroll-right {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(0%);
            }
        }
        .accordion-button {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    }

</style>

</head>
<body>

    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('home.page') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <svg class="w-12 h-12 text-[rgb(254,73,44)]"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <a href="{{ route('home.page') }}" class="flex items-center space-x-3 rtl:space-x-reverse"></a>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a10 10 0 110 20 10 10 0 010-20zm0 12.528V15h1v-1.472l.865-.499-1.73-1-.865.5L12 11.528zM12 9v1.472l-.865.499 1.73 1 .865-.5V15h1v-1.472l.865-.499-1.73-1-.865.5V9h-1zm-4.5 1.5h1v1h-1v-1zm8 0h1v1h-1v-1zm1.5 2.5h1v1h-1v-1zm-11-2h1v1h-1v-1zm13 0h1v1h-1v-1zm1.5 2.5h1v1h-1v-1zM5 8.5h1v1H5v-1zm13 0h1v1h-1v-1zm1.5 2.5h1v1h-1v-1zM5 8.5h1v1H5v-1zm13 0h1v1h-1v-1z" />
                </svg>
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">UK NIN</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse -mt-2">
                <a href="{{ route('nin.page') }}"> <button type="button" class="text-white mt-5 bg-[rgb(254,73,44)] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
                </a>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <select class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            <option value="" disabled selected class="text-gray-900 dark:text-white">Services</option>
                            <option value="#service1" class="text-gray-900 dark:text-white">- Enrol for your NIN</option>
                            <option value="#service2" class="text-gray-900 dark:text-white">- Solar panel inverter</option>
                        </select>
                    </li>

                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    <div class="content-wrapper">

        @yield('content')
     </div>


     @include('front.footer')
     <div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const toggleButton = document.querySelector('[data-collapse-toggle="navbar-sticky"]');
                const navbar = document.getElementById('navbar-sticky');

                toggleButton.addEventListener('click', function () {
                    navbar.classList.toggle('hidden');
                });

                // Redirect to Our Freight Options
                document.querySelectorAll('.link-to-class').forEach(function(link) {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        document.querySelector('.target-class').scrollIntoView({ behavior: 'smooth' });
                    });
                });

                // Background Image Toggle
                const background1 = document.getElementById('background1');
                const background2 = document.getElementById('background2');

                const images = [
                    'url(https://example.com/image1.jpg)',
                    'url(https://example.com/image2.jpg)'
                ];

                let currentImageIndex = 0;

                function changeBackground() {
                    currentImageIndex = (currentImageIndex + 1) % images.length;

                    if (background1.classList.contains('hidden')) {
                        background1.style.backgroundImage = images[currentImageIndex];
                        background1.classList.remove('hidden');
                        background2.classList.add('hidden');
                    } else {
                        background2.style.backgroundImage = images[currentImageIndex];
                        background2.classList.remove('hidden');
                        background1.classList.add('hidden');
                    }
                }

                // Initial background setup
                background1.style.backgroundImage = images[0];

                // Change background every 5 minutes (300000 milliseconds)
                setInterval(changeBackground, 300000);
            });
        </script>
        <!-- Font Awesome JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>


    </div>

</body>
</html>


