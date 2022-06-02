<div>
    <div class="flex flex-wrap -mx-4">
        <!-- First Repeater -->
        @forelse ($data as $item)
            <div class="w-full md:w-1/2 lg:w-1/4 px-4 flex flex-col">
                <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1"
                    data-wow-delay=".1s">
                    <div class="rounded overflow-hidden mb-8">
                        <div class="w-full">
                            <iframe width="100%" height="285"
                                src="https://www.youtube.com/embed/{{ $item->image }}?controls=0"></iframe>
                        </div>
                    </div>
                    <div class="flex items-center pb-4 text-sm text-gray-600">
                        @for ($i = 1; $i <= $item->stars; $i++)
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                class="w-4 h-4 text-yellow-500 fill-current">
                                <path
                                    d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                                </path>
                            </svg>
                        @endfor
                        @for ($i = 1; $i <= 5 - $item->stars; $i++)
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                class="w-4 h-4 text-gray-400 fill-current dark:text-gray-100">
                                <path
                                    d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                                </path>
                            </svg>
                        @endfor
                    </div>
                    <div class="flex justify-between">
                        <span
                            class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                            {{ $item->created_at->diffForHumans() }}
                        </span>
                    </div>
                    <h3>
                        <div
                            class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark">
                            {{ ucwords(strtolower($item->name)) }}
                        </div>
                    </h3>
                </div>
            </div>
        @empty
            <div class="w-full px-4">
                <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
            </div>
        @endforelse

    </div>
    {{ $data->links() }}
</div>
