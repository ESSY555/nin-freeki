@extends('Layout.navbar')
@section('content')






<div class="bg-cover bg-center bg-fixed -mb-5 bg-gray-900 text-gray-100"
      style="background-image: url('https://source.unsplash.com/1920x1080/?training,background');">
    <!-- Header -->
    <header class="bg-blue-600 bg-opacity-90 text-white py-4">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold">Training Program</h1>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-gray-900 bg-opacity-75 text-white py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold mb-4">Enhance Your Skills</h2>
            <p class="text-lg mb-8">At Minefield, the purpose of training is to maintain a skilled workforce for maximum productivity. Training plays a crucial role in the success and sustainability of businesses and is an important factor for achieving tangible outcomes. We organize </p>
            <a href="#register" class="bg-yellow-500 text-gray-900 py-2 px-6 rounded-full font-semibold">Get Started</a>
        </div>
    </section>

    <!-- Training Content Section -->
    <section class="py-16 bg-white bg-opacity-80">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row gap-12">
                <div class="flex-1">
                    <h3 class="text-2xl font-bold mb-4 text-gray-900">Why Choose Our Training?</h3>
                   <div class="text-black">
                     <p class="font-bold text-black pb-3 text-[20px]">Improved employee performance</p>
                    <p >Customized training programs address the specific skill gaps and development needs of employees, leading to enhanced performance in their roles. By focusing on the relevant skills and knowledge, employees are better equipped to meet the organisation's expectations and contribute to it's overall success.</p>
                    </div>
                   <div class="text-black pt-5">
                     <p class="font-bold text-black pb-3 text-[20px]">Increased employee engagement</p>
                    <p >Customized training courses that cater to individual learning preferences and address real-world challenges relevant to the employee's job role can significantly boost engagement and motivation. Engaged employees are more likely to be committed to their work, which in turn leads to higher productivity and better performance.</p>
                    </div>
                   <div class="text-black pt-5">
                     <p class="font-bold text-black pb-3 text-[20px]">Enhanced adaptability and agility</p>
                    <p >Customized training programs can be quickly adjusted to address new industry trends, technological 
                        advancements, or regulatory changes. This ensures that the <span class="text-orange-600">organisation</span> remains <span class="text-blue-600">agile</span> and adaptive, 
                        enabling it to stay ahead in a rapidly changing business environment.
                        Strengthened organisational culture.</p>
                    </div>
                
                </div>
                <div class="flex-1">
                    <img src="{{ asset('images/training.jpg') }}" class="w-full h-full object-contain">
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section id="register" class="bg-blue-600 bg-opacity-90 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold mb-6">Ready to Start Learning?</h3>
            <p class="text-lg mb-8">Join us today and take the first step towards achieving your goals.</p>
            <a href="#"
                class="bg-yellow-500 text-gray-900 py-2 px-6 rounded-full font-semibold">Register Now</a>
        </div>
    </section>
</div>
@endsection