<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ ucwords(strtolower($data->name)) }}
        </x-slot>

        <!-- Blog Details -->
        <section class="pt-20 lg:pt-[60px] pb-10 lg:pb-20">
            <div class="container">
                <div class="flex flex-wrap justify-center -mx-4">
                    <div class="w-full px-4">
                        <div class="lg:flex items-center justify-between overflow-hidden">
                            <div
                                class="lg:max-w-[565px] xl:max-w-[640px] w-full py-12 px-7 sm:px-12 md:p-16 lg:py-9 lg:px-16 xl:p-[70px]">
                                <div
                                    class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                    Qualification:
                                    <p class="text-lg text-dark inline">
                                        {{ $data->qualification }}
                                    </p>
                                </div>
                                <div
                                    class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                    Department:
                                    <p class="text-lg text-dark inline">
                                        {{ $data->department->name }}
                                    </p>
                                </div>
                                <div
                                    class="font-bold text-xl sm:text-2xl 2xl:text-[30px] sm:leading-snug text-dark mb-3">
                                    Profile:
                                </div>
                                <p class="text-base text-body-color mb-3 leading-relaxed">
                                    {{ $data->profile }}
                                </p>
                                <div class="text-center mt-10">
                                    <a href="{{ route('book_appointment', ['team_id' => $data->id]) }}"
                                        class="px-3 py-2 bg-gradient-to-r from-primary via-[#D4497A] to-primary font-semibold text-white text-lg rounded-xl hover:from-secondary hover:to-secondary transition ease-in-out duration-500">Book
                                        Appointment</a>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="relative inline-block z-10">
                                    <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->name }}"
                                        class="mx-auto lg:ml-auto" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Grip -->
                    <div class="flex flex-wrap -mx-4 mt-6">
                        <div class="w-full px-4 mt-14 wow fadeInUp" data-wow-delay=".2s">
                            <h2 class="font-semibold text-dark text-2xl sm:text-[28px] pb-5 relative">
                                Services Performed by Doctor {{ ucwords(strtolower($data->name)) }}
                            </h2>
                            <span class="h-[2px] bg-primary w-96 mb-10 inline-block"></span>
                        </div>
                        <!-- First Repeater -->
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-1 md:gap-5 mx-auto">
                            @forelse ($data->services as $item)
                                @include('components.frontend.service')
                            @empty
                                <div class="w-full px-4">
                                    <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
                                </div>
                            @endforelse
                        </div>

                    </div>
                </div>

                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4 mt-14 wow fadeInUp" data-wow-delay=".2s">
                        <h2 class="font-semibold text-dark text-2xl sm:text-[28px] pb-5 relative">
                            Related Doctors
                        </h2>
                        <span class="h-[2px] bg-primary w-20 mb-10 inline-block"></span>
                    </div>
                    <!-- First Repeater -->
                    @foreach ($related as $item)
                        @include('components.frontend.team')
                    @endforeach
                </div>
            </div>
        </section>

    </x-frontend.container>
</x-guest-layout>
