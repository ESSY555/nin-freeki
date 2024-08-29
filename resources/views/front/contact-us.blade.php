@extends('Layout.navbar')
@section('content')

<div class="bg-gray-100 text-gray-800 pt-[80px]">
    <!-- Header -->
    <header class="bg-blue-700 text-white py-6">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-center">Contact Us</h1>
        </div>
    </header>

    <!-- Contact Information Section -->
    <section class="py-12">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8"> 
            <div class="bg-white p-8 shadow-lg rounded-lg">
                <h2 class="text-2xl font-bold mb-4">Let us know your enquiry</h2>
                <p class="mb-6">By filling and submitting the form below, we will get back to you as soon as possible.</p>
                <form action="#" method="POST" class="space-y-4">
                    <div>
                        <label for="name" class="block text-gray-700">Your Name</label>
                        <input type="text" id="name" name="name" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700">Your Email</label>
                        <input type="email" id="email" name="email" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700">Your Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">Submit</button>
                    </div>
                </form>
            </div>

            <!-- Office Information -->
            <div class="bg-gray-50 p-8 shadow-lg rounded-lg">
                <h2 class="text-2xl font-bold mb-4">Our Office Locations</h2>
                <p class="mb-6">
                    24a Plumstead high street,<br>
                    South East London.
                </p>
                <p class="mb-6">
                    <strong>Tel:</strong> 02070181900
                </p>
                <h3 class="text-xl font-semibold mb-4">Email Us</h3>
                <p class="mb-2">
                    <a href="mailto:info@minefieldsdata.com" class="text-blue-600 hover:underline">info@minefieldsdata.com</a>
                </p>
                <p>
                    <a href="mailto:techincalteam@minefieldsdata.com" class="text-blue-600 hover:underline">techincalteam@minefieldsdata.com</a>
                </p>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-12 bg-blue-700 text-white">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-4 text-center">Find Us Here</h2>
            <div class="">
                <iframe class="w-full h-full rounded-lg shadow-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19804.643185435173!2d0.05522398749371572!3d51.48268296812912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8ae4b84cbb6b7%3A0xbccb11bc9b36d0c4!2sPlumstead%20High%20St%2C%20London%20SE18%2C%20UK!5e0!3m2!1sen!2suk!4v1616393966423!5m2!1sen!2suk" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>
</div>
@endsection