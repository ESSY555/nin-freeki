@extends('Layout.navbar')
@section('content')
<div class="bg-gray-100 pt-[100px]">
<div class="flex flex-col md:flex-row items-center justify-center w-9/12 m-auto p-3 gap-5">
    <div class="">
        <p class="font-bold text-2xl md:text-3xl lg:text-4xl">You are
            few steps away
            from getting your NIN</p>
            <p class="font-bold md:text-[22px] pb-8">From £40</p>
 <button class="rounded-full border-2 hover:bg-orange-300 p-4">Check Required Document</button>
    </div>
    <div class="w-full max-w-lg bg-white p-3 shadow rounded">
        <!-- Progress Indicator -->
        <div class="flex justify-between mb-4">
            <div class="w-1/3 h-1 bg-gray-300" id="progress1"></div>
            <div class="w-1/3 h-1 bg-gray-300 mx-2" id="progress2"></div>
            <div class="w-1/3 h-1 bg-gray-300" id="progress3"></div>
        </div>

        <!-- Form 1 -->
        <div id="form1" class="form">
            <form id="form1Content">
                <div class="mb-4">
                    <label for="fullName" class="block text-gray-700">Full Name</label>
                    <input type="text" id="fullName" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email Address</label>
                    <input type="email" id="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700">Phone Number</label>
                    <input type="tel" id="phone" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
                </div>
                <div class="flex justify-between">
                    <button class="px-4 py-2 bg-gray-400 text-white rounded-lg" disabled>Previous</button>
                    <button type="button" class="px-4 py-2 bg-blue-500 text-white rounded-lg" onclick="nextForm(1)">Next</button>
                </div>
            </form>
        </div>

        <!-- Form 2 -->
        <div id="form2" class="form hidden">
            <form id="form2Content">
                <div class="mb-4">
                    <label for="location" class="block text-gray-700">Select Location</label>
                    <select id="location" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
                        <option value="">Select Location</option>
                        <option value="Location1">Location 1</option>
                        <option value="Location2">Location 2</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="appointmentDate" class="block text-gray-700">Appointment Date</label>
                    <input type="date" id="appointmentDate" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
                </div>
                <div class="mb-4">
                    <label for="appointmentTime" class="block text-gray-700">Appointment Time</label>
                    <input type="time" id="appointmentTime" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
                </div>
                <div class="flex justify-between">
                    <button type="button" class="px-4 py-2 bg-blue-500 text-white rounded-lg" onclick="previousForm(1)">Previous</button>
                    <button type="button" class="px-4 py-2 bg-blue-500 text-white rounded-lg" onclick="nextForm(2)">Next</button>
                </div>
            </form>
        </div>

        <!-- Form 3 -->
        <div id="form3" class="form hidden">
            <form id="form3Content">
                <div class="mb-4">

                    @include('front.booking.nin-paper')
                </div>
                <div class="flex justify-between">
                    <button type="button" class="px-4 py-2 bg-blue-500 text-white rounded-lg" onclick="previousForm(2)">Previous</button>
                    <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-lg">Submit</button>
                </div>
            </form>

        </div>

    </div>
    </div>

    <div class="w-9/12 m-auto">
        @include('front.booking.document-required')
    </div>

    <div class="bg-[rgb(254,73,44)] p-[50px] -mb-5">
        <div class="w-11/12 m-auto">
            <p class="font-bold text-2xl md:text-3xl lg:text-4xl text-center pb-2 text-white">Need help with your booking?</p>
            <p class="text-center text-white"></a>Are you experiencing any difficulty with placing your appointment booking? We can help you book a time & date</p>
        <p class="text-white text-center">convenient for you. Click the button below to contact us.</p>
        <div class="flex justify-center">
            <button type="button" class="text-black hover:text-white mt-5 bg-[rgb(227,248,254)] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send Us A Message</button>
        </div>
        </div>
        </div>
    <script>
        function nextForm(currentForm) {
            const form = document.getElementById(`form${currentForm}Content`);
            if (form.checkValidity()) {
                document.getElementById(`form${currentForm}`).classList.add('hidden');
                document.getElementById(`form${currentForm + 1}`).classList.remove('hidden');
                updateProgress(currentForm + 1);
            } else {
                form.reportValidity();
            }
        }

        function previousForm(currentForm) {
            document.getElementById(`form${currentForm + 1}`).classList.add('hidden');
            document.getElementById(`form${currentForm}`).classList.remove('hidden');
            updateProgress(currentForm);
        }

        function updateProgress(formNumber) {
            document.getElementById('progress1').classList.remove('bg-green-500');
            document.getElementById('progress2').classList.remove('bg-green-500');
            document.getElementById('progress3').classList.remove('bg-green-500');

            for (let i = 1; i <= formNumber; i++) {
                document.getElementById(`progress${i}`).classList.add('bg-green-500');
            }
        }

        // Ensure the first form and progress indicator are active on page load
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("form1").classList.remove("hidden");
            updateProgress(1);
        });
    </script>
</div>

@endsection
