<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ $data->name }}
        </x-slot>

        <!-- Blog Details -->
        <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full px-4">
                <div class="relative rounded overflow-hidden z-20 mb-[60px] h-[300px] md:h-[400px] lg:h-[500px] wow fadeInUp"
                    data-wow-delay=".1s">
                    <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->name }}"
                        class="object-cover object-center w-full h-full" />
                    <div
                        class="absolute top-0 left-0 z-10 flex items-end w-full h-full  bg-gradient-to-t from-dark-700 to-transparent">
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center -mx-4">
                    <div class="w-full px-4">
                        <div>
                            <h2 class="font-bold text-dark text-[26px] sm:text-3xl md:text-4xl leading-snug sm:leading-snug md:leading-snug mb-6 wow fadeInUp"
                                data-wow-delay=".1s">
                                {{ $data->name }}
                            </h2>
                            <p class="mb-8 text-base leading-relaxed  text-body-color wow fadeInUp" data-wow-delay=".1s">
                                {{ $data->excerpt }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4 mt-14 wow fadeInUp" data-wow-delay=".2s">
                <h2 class="font-semibold text-dark text-2xl sm:text-[28px] pb-5 relative">
                    Doctors
                </h2>
                <span class="h-[2px] bg-primary w-20 mb-10 inline-block"></span>
            </div>
            <!-- First Repeater -->
            @foreach ($teams as $item)
                @include('components.frontend.team')
            @endforeach
        </div>

        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4 mt-14 wow fadeInUp" data-wow-delay=".2s">
                <h2 class="font-semibold text-dark text-2xl sm:text-[28px] pb-5 relative">
                    Services Performed by Doctors
                </h2>
                <span class="h-[2px] bg-primary w-96 mb-10 inline-block"></span>
            </div>
            <div class="w-full px-4 mt-14 wow fadeInUp" data-wow-delay=".2s">
                <div class="flex flex-wrap -mx-4">
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-1 md:gap-5 mx-auto">
                        @forelse ($services as $item)
                            @include('components.frontend.service')
                        @empty
                            <div class="w-full px-4">
                                <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

    </x-frontend.container>
</x-guest-layout>
