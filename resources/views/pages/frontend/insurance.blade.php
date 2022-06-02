<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Insurance') }}
        </x-slot>

        <div class="flex flex-wrap -mx-4">
            <!-- First Repeater -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-1 md:gap-5 mx-auto">
                @foreach ($data as $item)
                    <div class="w-full px-4 flex flex-col">
                        <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1"
                            data-wow-delay=".1s">
                            @if (!\Jenssegers\Agent\Facades\Agent::isMobile())
                                <div class="rounded overflow-hidden mb-8">
                                    <a href="{{ $item->link }}" class="block" target="_blank">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                            class="w-full transition group-hover:scale-125 group-hover:rotate-6 h-40 md:h-56 object-cover" />
                                    </a>
                                </div>
                            @endif
                            <div>
                                <h3>
                                    <a href="{{ $item->link }}"
                                        class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-2 inline-block text-dark hover:text-primary">
                                        {{ $item->name }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </x-frontend.container>
</x-guest-layout>
