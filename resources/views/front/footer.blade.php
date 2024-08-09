<footer class="bg-gray-800 text-white py-10 mt-5">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Solar Solutions -->
            <div>
                <h4 class="text-xl font-semibold mb-4">Solar Solutions</h4>
                <ul>
                    <li><a href="#" class="hover:underline">Solar Panels</a></li>
                    <li><a href="#" class="hover:underline">Installation Services</a></li>
                    <li><a href="#" class="hover:underline">Maintenance</a></li>
                    <li><a href="#" class="hover:underline">Consultation</a></li>
                </ul>
            </div>
            <!-- NIN Services -->
            <div>
                <h4 class="text-xl font-semibold mb-4">NIN Services</h4>
                <ul>
                    <li><a href="{{ route('home.page') }}" class="hover:underline">NIN Registration</a></li>
                    <li><a href="#" class="hover:underline">NIN Verification</a></li>
                    <li><a href="#" class="hover:underline">NIN Renewal</a></li>
                    <li><a href="#" class="hover:underline">Support</a></li>
                </ul>
            </div>
            <!-- Contact Information -->
            <div>
                <h4 class="text-xl font-semibold mb-4">Contact Us</h4>
                <p>24a Plumstead high street, South East London.</p>
                <p>Email: infor@minefieldsdata.com</p>
                <p>Phone: 02070181900</p>
            </div>
            <!-- Newsletter Subscription -->
            <div>
                <h4 class="text-xl font-semibold mb-4">Subscribe to Our Newsletter</h4>
                <form action="#" method="post">
                    <input type="email" name="email" placeholder="Enter your email" class="w-full p-2 rounded mb-2 text-gray-900">
                    <button type="submit" class="w-full bg-yellow-500 text-gray-900 py-2 rounded hover:bg-yellow-600">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="mt-8 text-center border-t border-gray-700 pt-4">
            <p>&copy; 2024 Solar & NIN Services. All rights reserved.</p>
        </div>
    </div>
</footer>
