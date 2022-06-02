<div>
    <!-- Select Category -->
    <div class="flex flex-no-wrap overflow-x-auto scrolling-touch items-start mb-12">
        <!-- First Repeater -->
        @foreach ($package as $item)
            <div class="flex-none mr-8 border rounded-3xl">
                <div class="space-y-4 cursor-pointer">
                    <div class="px-4 py-2">
                        <div class="text-lg leading-6 font-medium space-y-1">
                            <label for={{ $item->id }}>
                                <input type='radio' id="{{ $item->id }}" hidden value="{{ $item->id }}"
                                    wire:model='package_id' />
                                <span class="font-bold text-gray-800 text-lg cursor-pointer">{{ $item->name }}</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <!-- Blog Grip -->
    <div class="flex flex-wrap -mx-4">
        <!-- First Repeater -->
        @forelse ($data as $item)
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 flex flex-col">
                <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1"
                    data-wow-delay=".1s">
                    <div class="rounded overflow-hidden mb-8">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                            class="w-full transition group-hover:scale-125 group-hover:rotate-6 h-56 object-cover" />
                    </div>
                    <div>
                        <div class="flex justify-end">
                            <span
                                class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                {{ $item->package->name }}
                            </span>
                        </div>
                        <h3
                            class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark">
                            {{ $item->name }}
                        </h3>
                        @php
                            $list = explode(';', $item->list);
                        @endphp
                        @foreach ($list as $item)
                            <li class="text-base text-gray-800">
                                {{ $item }}
                            </li>
                        @endforeach
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
