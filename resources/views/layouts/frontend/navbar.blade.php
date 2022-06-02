<!-- ====== Navbar Section Start -->
<div class="fixed top-0 left-0 z-40 flex items-center w-full bg-gradient-to-r from-secondary to-primary">
    <div class="container max-w-screen-2xl mx-auto px-4 py-4">

        <nav class="flex-wrap lg:flex items-center justify-between" x-data="{ navbarOpen: false }">
            <div class="flex items-center justify-center lg:justify-start space-x-3">
                @include('components.frontend.social-media-icons')
            </div>
            <ul class="lg:flex flex-col lg:flex-row lg:items-center lg:space-x-4 xl:space-x-7"
                :class="{ 'hidden': !navbarOpen, 'flex': navbarOpen }">
                <a href="{{ route('book_appointment') }}"
                    class="px-3 py-2 bg-white font-semibold text-lg rounded-xl hover:bg-secondary hover:text-gray-50 transition ease-in-out duration-500 {{ Request::is('book_appointment*') ? 'bg-secondary text-gray-50' : '' }}">{{ 'Book Appointment' }}</a>
                <a href="{{ route('feedback') }}"
                    class="px-3 py-2 bg-white font-semibold text-lg rounded-xl hover:bg-secondary hover:text-gray-50 transition ease-in-out duration-500 {{ Request::is('feedback*') ? 'bg-secondary text-gray-50' : '' }}">{{ 'Feedback' }}</a>
                <a href="{{ 'http://124.123.32.48:9999/shivam/onlinereporting/index.jsp' }}" target="_blank"
                    class="px-3 py-2 bg-white font-semibold text-lg rounded-xl hover:bg-secondary hover:text-gray-50 transition ease-in-out duration-500">{{ 'Online Reports' }}<i
                        data-feather="external-link" width='20' height='20' class="inline"></i></a>
            </ul>
        </nav>
        <nav class="flex-wrap lg:flex items-center justify-between" x-data="{ navbarOpen: false }">

            <div class="flex items-center">
                <a href="{{ route('homepage') }}">
                    <img src="{{ asset('storage/' . $logo) }}" class="w-52 h-auto" alt="Logo">
                </a>

                <button
                    class="lg:hidden w-10 h-10 ml-auto flex items-center justify-center border border-white text-white rounded-md"
                    @click="navbarOpen = !navbarOpen">
                    <i data-feather="menu"></i>
                </button>
            </div>

            <ul class="lg:flex flex-col lg:flex-row lg:items-center lg:space-x-4 xl:space-x-7"
                :class="{ 'hidden': !navbarOpen, 'flex': navbarOpen }">
                <li
                    class="font-semibold text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('/*') ? 'underline underline-offset-2 decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('homepage') }}">Home</a>
                </li>
                <li
                    class="font-semibold text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('department*') ? 'underline underline-offset-2 decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('departments') }}">Departments</a>
                </li>
                <li
                    class="font-semibold text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('team*') ? 'underline underline-offset-2 decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('teams') }}">Doctors</a>
                </li>
                <li
                    class="font-semibold text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('service*') ? 'underline underline-offset-2 decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('services') }}">Services</a>
                </li>
                <li
                    class="font-semibold text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('package*') ? 'underline underline-offset-2 decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('packages') }}">Packages</a>
                </li>
                <li
                    class="font-semibold text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('insurance*') ? 'underline underline-offset-2 decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('insurance') }}">Insurance</a>
                </li>
                <li
                    class="font-semibold text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('review*') ? 'underline underline-offset-2 decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('reviews') }}">Reviews</a>
                </li>
                <li
                    class="font-semibold text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('blog*') ? 'underline underline-offset-2 decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('blogs') }}">Blogs</a>
                </li>
                <li
                    class="font-semibold text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('career*') ? 'underline underline-offset-2 decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('career') }}">Career</a>
                </li>
                <li
                    class="font-semibold text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('gallery*') ? 'underline underline-offset-2 decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('gallery') }}">Gallery</a>
                </li>
                <li
                    class="font-semibold text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('about_us*') ? 'underline underline-offset-2 decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('about_us') }}">About Us</a>
                </li>
                <li
                    class="font-semibold text-gray-50 transition ease-in-out duration-300 mb-5 lg:mb-0 lg:hover:scale-125 lg:hover:rotate-6 {{ Request::is('contact_us*') ? 'underline underline-offset-2 decoration-gray-50 decoration-4' : '' }}">
                    <a href="{{ route('contact_us') }}">Contact Us</a>
                </li>
            </ul>
        </nav>

    </div>
</div>
<!-- ====== Navbar Section End -->
