<div>
    @if (\Jenssegers\Agent\Facades\Agent::isMobile())
        <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
                <select wire:model='department_id'
                    class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    aria-label="Default select example">
                    <option selected>Select Department</option>
                    @foreach ($department as $item)
                        <option value="{{ $item->id }}">{{ ucwords(strtolower($item->name)) }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @else
        <!-- Select Category -->
        <div class="flex flex-no-wrap overflow-x-auto scrolling-touch items-start mb-12">
            <!-- First Repeater -->
            @foreach ($department as $item)
                <div class="flex-none mr-8 border rounded-3xl">
                    <div class="space-y-4 cursor-pointer">
                        <div class="px-4 py-2">
                            <div class="text-lg leading-6 font-medium space-y-1">
                                <label for={{ $item->id }}>
                                    <input type='radio' id="{{ $item->id }}" hidden value="{{ $item->id }}"
                                        wire:model='department_id' />
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
    <div class="flex flex-wrap -mx-4 mt-3">
        <!-- First Repeater -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-1 md:gap-5 mx-auto">
            @forelse ($data as $item)
                @include('components.frontend.service')
            @empty
                <div class="w-full px-4">
                    <div class="text-center font-bold text-gray-800 text-lg">No Data Available</div>
                </div>
            @endforelse
        </div>

    </div>
    {{ $data->links() }}
</div>
