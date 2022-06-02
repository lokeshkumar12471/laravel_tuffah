<div>
    @if (\Jenssegers\Agent\Facades\Agent::isMobile())
        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
                <select wire:model='team_id'
                    class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    aria-label="Default select example">
                    <option selected>Select Doctor</option>
                    @foreach ($team as $item)
                        <option value="{{ $item->id }}">{{ ucwords(strtolower($item->name)) }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @else
        <!-- Select Category -->
        <div class="flex flex-no-wrap overflow-x-auto scrolling-touch items-start mb-12">
            <!-- First Repeater -->
            @foreach ($team as $item)
                <div class="flex-none mr-8 border rounded-3xl">
                    <div class="space-y-4 cursor-pointer">
                        <div class="px-4 py-2">
                            <div class="text-lg leading-6 font-medium space-y-1">
                                <label for={{ $item->id }}>
                                    <input type='radio' id="{{ $item->id }}" hidden value="{{ $item->id }}"
                                        wire:model='team_id' />
                                    <span
                                        class="font-bold text-gray-800 text-lg cursor-pointer">{{ $item->name }}</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <!-- Blog Grip -->
    <div class="flex flex-wrap -mx-4">
        <!-- First Repeater -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-1 md:gap-5 lg:gap-10 mx-auto">
            @forelse ($data as $item)
                <div class="w-full px-4 flex flex-col">
                    <div class="mb-10 group wow fadeInUp border-gray-200 border-2 p-4 rounded-lg shadow-testimonial flex-1"
                        data-wow-delay=".1s">
                        <div class="rounded overflow-hidden mb-8">
                            <a href="{{ route('blog_single', ['id' => $item->id]) }}" class="block">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                    class="w-full transition group-hover:scale-125 group-hover:rotate-6 h-56 object-cover" />
                            </a>
                        </div>
                        <div>
                            <div class="flex justify-between">
                                <span
                                    class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                    {{ $item->created_at->diffForHumans() }}
                                </span>
                                <span
                                    class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                    {{ $item->team->name }}
                                </span>
                            </div>
                            <h3>
                                <a href="{{ route('blog_single', ['id' => $item->id]) }}"
                                    class="font-semibold teloginxt-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
                                    {{ $item->title }}
                                </a>
                            </h3>
                            <p class="text-base text-body-color">
                                {{ $item->excerpt }}
                            </p>
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
    {{ $data->links() }}
</div>
