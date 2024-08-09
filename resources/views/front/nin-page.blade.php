@extends('Layout.navbar')
@section('content')

<div>
<div class="mt-[80px] bg-[rgb(227,248,254)] ">
    <div class="w-11/12 m-auto py-5">


        <div class="flex flex-col md:flex-row justify-between gap-3 items-center">
            <div class="flex-1">
                <p class="font-bold text-2xl md:text-3xl lg:text-4xl">
                    Enroll for your NIN right here in the UK
                </p>
                <p>Are you a Nigerian residing in the UK? Do you need your NIN? You can now register and process your NIN hassle-free. Book an appointment with us, submit your information within minutes and make your NIN available in a few days.</p>
                <p class="text-2xl md:text-3xl lg:text-4xl">From £40</p>
                <div>
                    <button type="button" class="text-white mt-5 bg-[rgb(254,73,44)] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
                    <button type="button" class="rounded-full border-2 border-gray-400 hover:bg-orange-600 px-4 py-2 text-cente">Learn More</button>
                </div>
            </div>

            <div class="flex-1">
                <img src="{{ asset('images/lady-holding-nin.JPG') }}" alt="NIN Enrollment" class="rounded-lg shadow-lg">
            </div>
        </div>
</div>
</div>

@include('front.booking.document-required')

<div class="bg-[#d0f2e0]">
    <div class="w-11/12 m-auto pt-5">
        <p class="font-bold text-2xl md:text-3xl lg:text-4xl">How it works</p>
        <p class="text-2xl">The process of obtaining your NIN is seamless. It goes through the steps highlighted below</p>
        <div class="flex flex-col md:flex-row justify-between gap-5">
            <div class="bg-white rounded-xlg shadow mt-5 p-5">
                <img src="{{ asset('images/new-bio.jpg') }}" alt="NIN Enrollment" class="">
             <div class="pt-3">
                <p class="text-2xl font-bold pb-5">Schedule an Appointment</p>
                <p class="">You can pick a convenient place, date,<br> and time to schedule your<br> appointment. Your payment <br> approves your appointment.</p>
                <p class="text-2xl md:text-3xl lg:text-4xl">From £40</p>
             </div>
            </div>
            <div class="bg-[rgb(227,248,254)] text-black rounded-lg shadow mt-5 p-5">
                <img src="{{ asset('images/bio-data.jpg') }}" alt="NIN Enrollment" class="">
             <div class="pt-3">
                <p class="text-2xl font-bold pb-5">Capture your data</p>
                <p class="">Visit our office with your documents on your appointment date to capture your biometrics and process your data during the scheduled appointment.</p>

             </div>
            </div>
            <div class="bg-white rounded-lg shadow mt-5 p-5">
                <img src="{{ asset('images/hand NIN.JPG') }}" alt="NIN Enrollment" class="">
             <div class="pt-3">
                <p class="text-2xl font-bold pb-5">Get your NIN Slip</p>
                <p class="">If you choose the option of NIN slip, you will collect it within 10 working days. If you opt for the NIN PVC Card, we
                will deliver the card to your specified address once the processing is completed..</p>
             </div>
            </div>
        </div>
        <div class="py-10">
            <p class="font-bold text-2xl md:text-3xl lg:text-4xl text-center pt-5 pb-8">Why do I need an NIN ?</p>
        <div class=" flex flex-col md:flex-row justify-between gap-3">
           <div>
            <ul class="list-disc list-inside">
                <li>To avoid a travel ban</li>
                <li>
                    To prevent international passport renewal denial</li>
                    <li>To avoid voting restrictions</li>
                    <li>To open and ward off your Nigerian bank account suspension</li>
                    <li>To avert your Nigerian SIM card disconnection</li>
                    <li>To avoid disruption of services to you from all Nigerian Embassies and Missions abroad</li>
            </ul>
            <div>
                <button type="button" class="text-white mt-5 bg-[rgb(254,73,44)] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
                <p class="pt-5">For More Information, Visit the <a href="" class="text-orange-400">FAQS Section</a></p>
            </div>
           </div>
           <div>
                <img src="{{ asset('images/why-nin.JPG') }}" alt="NIN Enrollment" class="">
           </div>
        </div>
        </div>

        <div class="py-10">

        <div class=" flex flex-col md:flex-row justify-between gap-5 bg-white p-3">
            <div>
                <img src="{{ asset('images/hand NIN.JPG') }}" alt="NIN Enrollment" class="">
            </div>
           <div class="bg-white">
            <p class="font-bold text-2xl md:text-3xl lg:text-4xl pt-5 pb-8">What your NIN is useful for?</p>
            <ul class="list-disc list-inside bg-white">
                <li>To identify as a Nigerian wherever you are</li>
                <li>
                    To retain access to any necessary services from the Nigerian Government from anywhere you are</li>
                    <li>To renew your Nigerian International Passport from where ever you are</li>
                    <li>To register and enjoy access to your Nigerian SIM card</li>
                    <li>To obtain a Nigerian Voters card</li>
                    <li>To register for your drivers' license</li>
                    <li>To use for all transactions requiring identity verification</li>
                    <li>To regulate your information across all agencies at home and abroad</li>
            </ul>
            <div>
                <button type="button" class="text-white mt-5 bg-[rgb(254,73,44)] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Book Now</button>
                <p class="pt-5">For More Information, Visit the <a href="" class="text-orange-400">FAQS Section</a></p>
            </div>
           </div>
        </div>
        </div>
    </div>
</div>

<div class="bg-[rgb(254,73,44)] p-[50px]">
<div class="w-11/12 m-auto">
    <p class="font-bold text-2xl md:text-3xl lg:text-4xl text-center pb-2 text-white">Do you have issues</p>
    <p class="font-bold text-2xl md:text-3xl lg:text-4xl text-center pb-5 text-white">getting your NIN?</p>
    <p class="text-center text-white">Look no further. The Nigerian Government has authorized <a href="" class="underline">Deacil Professional Services</a> to process your NIN without stress</p>
<p class="text-white">and delays. We have the necessary skills and equipment to undertake NIN registration for Nigerians residing in the UK</p>
<div class="flex justify-center">
    <a href="{{ route('booking.section') }}">  <button type="button" class="text-black mt-5 bg-gray-300 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Book Now</button>
    </a>
</div>
</div>
</div>

@include('front.faq')
</div>
@endsection
