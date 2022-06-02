<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            Packages
        </x-slot>

        <!-- Blog Grip -->
        <div class="flex flex-wrap -mx-4 mt-3">
            <!-- First Repeater -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-1 md:gap-5 lg:gap-10 mx-auto">
                @forelse ($data as $item)
                    <div class="w-full px-4 flex flex-col">
                        <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1"
                            data-wow-delay=".1s">
                            <div class="rounded overflow-hidden mb-8">
                                <a href="{{ route('package_single', ['id' => $item->id]) }}" class="block">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                        class="w-full transition group-hover:scale-125 group-hover:rotate-6 h-40 md:h-56 object-cover" />
                                </a>
                            </div>
                            <div>
                                <h3
                                    class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark">
                                    <a href="{{ route('package_single', ['id' => $item->id]) }}"
                                        class="block">
                                        {{ $item->name }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="w-full px-4">
                        <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
                    </div>
                @endforelse
            </div>

        </div>

    </x-frontend.container>
</x-guest-layout>
