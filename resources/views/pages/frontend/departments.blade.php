<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Departments') }}
        </x-slot>

        <!-- Blog Grip -->
        <div class="flex flex-wrap -mx-4">
            <!-- First Repeater -->
            @foreach ($data as $item)
                <div class="w-1/2 md:w-1/2 lg:w-1/4 px-4 flex flex-col">
                    <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1"
                        data-wow-delay=".1s">
                        <div class="rounded overflow-hidden mb-2 md:mb-8">
                            <a href="{{ route('department_single', ['id' => $item->id]) }}" class="block">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                    class="w-full transition group-hover:scale-125 group-hover:rotate-6 h-40 md:h-56 object-cover" />
                            </a>
                        </div>
                        <div>
                            <h3>
                                <a href="{{ route('department_single', ['id' => $item->id]) }}"
                                    class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl md:mb-4 inline-block text-dark hover:text-primary">
                                    {{ $item->name }}
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </x-frontend.container>
</x-guest-layout>
