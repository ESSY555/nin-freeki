
<div class="bg-gray-100 flex items-center justify-center">
    <div class="w-full max-w-lg">
        <!-- Tabs -->
     {{-- <div>
        <p class="font-bold">Select Type:</p>
        <div class="flex flex-col md:flex-row justify-between gap-3 py-3">
            <div class="font-bold py-8 px-3 border rounded">
                I want
    NIN Card
    £15 + £40
            </div>
            <div class="font-bold py-8 px-3 border rounded">
                I want
    the paper
    (Free) + £40
            </div>
           </div>
     </div> --}}
     <div class="py-3"> <p class="font-bold">Select Type:</p></div>
        <div class="flex border-b border-gray-300">
            <button id="tab1" class="tab px-4 py-2 w-1/2 text-center bg-gray-200 text-black border-b-2 border-transparent focus:outline-none" onclick="showContent(1)">I want
                NIN Card
                £15 + £40</button>
            <button id="tab2" class="tab px-4 py-2 w-1/2 text-center bg-gray-200 text-black border-b-2 border-transparent focus:outline-none" onclick="showContent(2)">I want the paper (Free) + £40</button>
        </div>

        <!-- Content Sections -->
        <div id="content1" class="content-section hidden">
            <img src="{{ asset('images/hand NIN.JPG') }}" alt="Solar Panel" class="w-full md:h-[150px] rounded-lg shadow-lg">
            <div class="w-full max-w-lg p-6 bg-white rounded-lg shadow-md">
                <!-- Form -->
                <form id="deliveryForm" class="space-y-4">
                    <!-- Postal Code -->
                    <div>
                        <label for="postalCode" class="block text-gray-700 mb-2">Postal Code</label>
                        <input type="text" id="postalCode" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white" placeholder="Enter Postal Code" required>
                    </div>

                    <!-- Delivery Address -->
                    <div>
                        <label for="deliveryAddress" class="block text-gray-700 mb-2">Delivery Address</label>
                        <textarea id="deliveryAddress" class="w-full h-12  px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white" rows="4" placeholder="Enter Delivery Address" required></textarea>
                    </div>

                    <div class="pt-5">
<p class="font-bold">NIN PVC Card: £15
    NIN Capture Fee: £40
    Total to pay: £55</p>
    <p class="pt-3 text-orange-400">We only accept Cash/Card Payment during NIN capture.</p>
                    </div>
                </form>
            </div>
        </div>
        <div id="content2" class="content-section hidden bg-white p-5">
            <img src="{{ asset('images/nin.JPG') }}" alt="Solar Panel" class="w-full md:h-[150px] rounded-lg shadow-lg">
            <div class="w-full max-w-lg p-6 bg-white rounded-lg shadow-md mt-5">
                <!-- Form -->
                <div class="space-y-4">


                    <div class="pt-5">
<p class="font-bold">Paper Printout: Free
    NIN Capture Fee: £40
    Total to pay: £40</p>
    <p class="pt-3 text-orange-400">We only accept Cash/Card Payment during NIN capture.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showContent(tabNumber) {
            // Hide all content sections
            document.querySelectorAll('.content-section').forEach(section => section.classList.add('hidden'));

            // Remove active class from all tabs
            document.querySelectorAll('.tab').forEach(button => {
                button.classList.remove('bg-blue-500', 'text-white', 'border-blue-500');
                button.classList.add('bg-gray-200', 'text-black');
            });

            // Show the selected content section
            document.getElementById(`content${tabNumber}`).classList.remove('hidden');

            // Add active class to the selected tab
            document.getElementById(`tab${tabNumber}`).classList.add('bg-blue-500', 'text-black', 'border-blue-500');
        }

        // Show the first tab by default on page load
        document.addEventListener("DOMContentLoaded", function() {
            showContent(1);
        });
    </script>
</div>

