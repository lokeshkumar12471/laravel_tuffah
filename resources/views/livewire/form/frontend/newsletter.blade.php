<div class="lg:relative py-4 lg:py-0">
    <h1 class="font-semibold text-white text-xl md:text-4xl text-center lg:text-left leading-normal md:mb-5 lg:mb-10">
        Interested in volunteering? Join <br> with us now</h1>

    <div class="hidden md:block flex items-center text-center lg:text-left space-x-5">
        <form wire:submit.prevent="submit">
            <input type="email" placeholder="Email" wire:model="email"
                class="px-4 py-4 w-96 bg-gray-50 placeholder-gray-800 rounded-xl outline-none">
            @error('email')
                <p class="mt-1 text-xs italic text-red-500">{{ $message }}</p>
            @enderror
            <button type="submit"
                class="px-6 py-3 font-semibold bg-gray-50 text-info text-lg rounded-xl hover:bg-primary hover:text-white transition ease-in-out duration-500">Join</button>
            <!-- Success message -->
            @if ($success)
                <div class="px-4 py-3 text-teal-900 bg-teal-100 border-t-4 border-teal-500 rounded-b shadow-md mt-4"
                    role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="w-6 h-6 mr-4 text-teal-500 fill-current"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                            </svg></div>
                        <div>
                            <p class="font-bold">{{ $success }}</p>
                        </div>
                    </div>
                </div>
            @endif
        </form>
    </div>
</div>
