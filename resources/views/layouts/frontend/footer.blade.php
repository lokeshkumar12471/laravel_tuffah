<footer class="bg-gradient-to-r from-primary to-secondary py-16">

    <div class="container max-w-screen-2xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row lg:justify-between">

            <div class="space-y-7 mb-10 lg:mb-0">
                <div class="flex justify-center lg:justify-start">
                    <a href="{{ route('homepage') }}">
                        <img src="{{ asset('storage/' . $logo) }}" class="w-52 h-auto" alt="Logo">
                    </a>
                </div>

                <div class="flex justify-start max-w-xs text-gray-50">
                    <p>{{ $address }}</p>
                </div>
                <div class="flex justify-start max-w-xs">
                    <a href="mail:{{ $email }}">
                        <p class="text-base text-gray-100">{{ $email }}</p>
                    </a>
                </div>
                @foreach ($contact_no as $item)
                    <div class="flex justify-start max-w-xs">
                        <a href="tel:{{ $item }}">
                            <p class="text-base text-gray-100">{{ $item }}</p>
                        </a>
                    </div>
                @endforeach

                <div class="flex items-center justify-center lg:justify-start space-x-3">
                    @include('components.frontend.social-media-icons')
                </div>
            </div>

            <div class="text-center lg:text-left space-y-5 mb-10 lg:mb-0">
                <h4 class="font-semibold text-gray-100 text-lg md:text-2xl">Quick links</h4>

                <a href="{{ route('terms') }}"
                    class="block font-light text-gray-50 text-sm md:text-lg hover:text-gray-50 transition ease-in-out duration-300">Terms</a>

                <a href="{{ route('privacy') }}"
                    class="block font-light text-gray-50 text-sm md:text-lg hover:text-gray-50 transition ease-in-out duration-300">Privacy</a>

                <a href="{{ route('career') }}"
                    class="block font-light text-gray-50 text-sm md:text-lg hover:text-gray-50 transition ease-in-out duration-300">Career</a>

                <a href="{{ route('about_us') }}"
                    class="block font-light text-gray-50 text-sm md:text-lg hover:text-gray-50 transition ease-in-out duration-300">About
                    Us</a>

                <a href="{{ route('blogs') }}"
                    class="block font-light text-gray-50 text-sm md:text-lg hover:text-gray-50 transition ease-in-out duration-300">Blogs</a>

                <a href="{{ route('packages') }}"
                    class="block font-light text-gray-50 text-sm md:text-lg hover:text-gray-50 transition ease-in-out duration-300">Packages</a>

                <a href="{{ route('feedback') }}"
                    class="block font-light text-gray-50 text-sm md:text-lg hover:text-gray-50 transition ease-in-out duration-300">Feedback</a>
            </div>

            @if (!Jenssegers\Agent\Facades\Agent::isMobile() || Jenssegers\Agent\Facades\Agent::isTablet())
                <div>
                    <iframe src="{{ $embed_map_link }}" width="600" height="360" style="border:0;" allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            @else
                <div class="aspect-w-16 aspect-h-9">
                    <iframe src="{{ $embed_map_link }}" width="600" height="200" style="border:0;" allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            @endif

        </div>
    </div>
    <!-- container.// -->

</footer>
