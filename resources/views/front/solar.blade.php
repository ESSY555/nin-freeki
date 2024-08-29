@extends('Layout.navbar')
@section('content')
    
    <!-- Hero Section -->
    <section class="bg-cover bg-center mt-[100px] flex items-center justify-center" style="background-image: url('{{ asset('images/energy renewal.jpg') }}');">
        <div class="text-center text-white bg-black bg-opacity-50 p-8 rounded-lg">
            <h1 class="text-5xl font-bold mb-4">Harness the Power of the Sun</h1>
            <p class="text-lg mb-8">Join the revolution with our advanced solar panel solutions.</p>
            <a href="#contact" class="bg-yellow-500 text-gray-900 py-2 px-6 rounded-full font-semibold">Get Started</a>
        </div>
    </section>

    <!-- Introduction Section -->
    <section id="introduction" class="py-16 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">Why Choose Solar?</h2>
            <p class="text-lg text-gray-700 mb-8">Solar energy is a clean, renewable source of power that can reduce your energy bills and carbon footprint. Our solar panel systems are designed to maximize efficiency and savings.</p>
            <a href="#benefits" class="text-blue-500 font-semibold">Learn More</a>
        </div>
    </section>

    <!-- Benefits Section -->
  <section id="benefits" class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 grid md:grid-cols-3 gap-8">
        <div class="text-center">
            <img src="{{ asset('images/blog-energy-efficiency.jpg') }}" alt="Solar Panel" class="mx-auto mb-4 rounded-lg shadow-lg w-94 h-64 object-cover">
            <h3 class="text-2xl font-bold mb-2">Lower Energy Bills</h3>
            <p class="text-gray-700">Reduce your reliance on traditional energy sources and save on your electricity bills.</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('images/increase-property-value.JPG') }}" alt="Environmentally Friendly" class="mx-auto mb-4 rounded-lg shadow-lg w-94 h-64 object-cover">
            <h3 class="text-2xl font-bold mb-2">Environmentally Friendly</h3>
            <p class="text-gray-700">Solar power is a clean, renewable energy source that reduces your carbon footprint.</p>
        </div>
        <div class="text-center">
            <img src="{{ asset('images/hand-bulb2.JPG') }}" alt="Increase Property Value" class="mx-auto mb-4 rounded-lg shadow-lg w-94 h-64 object-cover">
            <h3 class="text-2xl font-bold mb-2">Increase Property Value</h3>
            <p class="text-gray-700">Installing solar panels can increase the value of your property and appeal to eco-conscious buyers.</p>
        </div>
    </div>
</section>


    <!-- How It Works Section -->
    <section id="how-it-works" class="py-16 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-8">How Solar Panels Work</h2>
            <div class="grid md:grid-cols-2 gap-8">
             <img src="{{ asset('images/second-solar-energy.JPG') }}" alt="Solar Panel" class="rounded-lg shadow-lg">
                <div class="text-left">
                    <h3 class="text-2xl font-bold mb-4">Harnessing Solar Energy</h3>
                    <p class="text-gray-700 mb-4">Our solar panels capture sunlight and convert it into electricity through photovoltaic cells. This electricity is then used to power your home or business, or stored in batteries for later use.</p>
                    <ul class="list-disc pl-5 text-gray-700">
                        <li>Solar panels absorb sunlight</li>
                        <li>Photovoltaic cells convert sunlight into electricity</li>
                        <li>Electricity powers your home or business</li>
                        <li>Excess energy can be stored or sold back to the grid</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section id="packages" class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-8">Our Solar Packages</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Basic Package</h3>
                    <p class="text-gray-700 mb-4">Perfect for small homes and starter installations.</p>
                    <p class="text-xl font-bold text-yellow-500 mb-4">$3,000</p>
                    <ul class="list-disc pl-5 text-gray-700 mb-4">
                        <li>3 kW Solar Panel System</li>
                        <li>Installation Included</li>
                        <li>25-Year Warranty</li>
                    </ul>
                    <a href="#contact" class="bg-blue-500 text-white py-2 px-4 rounded-full">Get Started</a>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Standard Package</h3>
                    <p class="text-gray-700 mb-4">Ideal for medium-sized homes with higher energy needs.</p>
                    <p class="text-xl font-bold text-yellow-500 mb-4">$6,000</p>
                    <ul class="list-disc pl-5 text-gray-700 mb-4">
                        <li>6 kW Solar Panel System</li>
                        <li>Installation Included</li>
                        <li>25-Year Warranty</li>
                    </ul>
                    <a href="#contact" class="bg-blue-500 text-white py-2 px-4 rounded-full">Get Started</a>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Premium Package</h3>
                    <p class="text-gray-700 mb-4">Best for large homes or businesses with high energy demands.</p>
                    <p class="text-xl font-bold text-yellow-500 mb-4">$10,000</p>
                    <ul class="list-disc pl-5 text-gray-700 mb-4">
                        <li>10 kW Solar Panel System</li>
                        <li>Installation Included</li>
                        <li>25-Year Warranty</li>
                    </ul>
                    <a href="#contact" class="bg-blue-500 text-white py-2 px-4 rounded-full">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-8">What Our Customers Say</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <p class="text-gray-700 mb-4">"The solar panels have drastically reduced our electricity bills, and the installation process was seamless."</p>
                    <p class="font-bold">- John Doe</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <p class="text-gray-700 mb-4">"We are thrilled with our new solar system. It's efficient, reliable, and eco-friendly."</p>
                    <p class="font-bold">- Jane Smith</p>
                </div>
            </div>
        </div>
    </section>

   @endsection