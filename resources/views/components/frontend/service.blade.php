<div class="w-full px-4 flex flex-col">
    <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1"
        data-wow-delay=".1s">
        <div class="rounded overflow-hidden mb-8">
            <a href="{{ route('service_single', ['id' => $item->id]) }}" class="block">
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                    class="w-full transition group-hover:scale-125 group-hover:rotate-6 h-40 md:h-56 object-cover" />
            </a>
        </div>
        <div>
            <div class="justify-end hidden md:flex">
                <span
                    class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                    {{ $item->department->name }}
                </span>
            </div>
            <h3>
                <a href="{{ route('service_single', ['id' => $item->id]) }}"
                    class="font-semibold teloginxt-xl sm:text-2xl md:text-lg lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
                    {{ $item->title }}
                </a>
            </h3>
        </div>
    </div>
</div>
