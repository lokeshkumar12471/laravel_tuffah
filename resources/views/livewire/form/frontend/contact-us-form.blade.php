<div class="px-4 w-full lg:w-5/12 xl:w-4/12">
    <div class="shadow-testimonial rounded-lg border-gray-200 border-2 py-10 px-8 md:p-[60px] lg:p-10 2xl:p-[60px] sm:py-12 sm:px-10 lg:py-12 lg:px-10 wow fadeInUp"
        data-wow-delay=".2s">
        <h3 class="font-semibold mb-8 text-2xl md:text-[26px]">
            Send us a Message
        </h3>
        <form wire:submit.prevent="submit">
            <div class="mb-6">
                <label for="name" class="font-normal block text-dark">Full Name<span
                        class="text-red-600 mr-2">*</span></label>
                <input type="text" id="name" placeholder="Adam Gelius" wire:model="name"
                    class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4" />
                @error('name')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="font-normal block text-dark">Email</label>
                <input type="email" id="email" placeholder="example@yourmail.com" wire:model="email"
                    class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4" />
                @error('email')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-6">
                <label for="phone" class="font-normal block text-dark">Phone<span
                        class="text-red-600 ml-2">*</span></label>
                <input type="text" id="phone" placeholder="+885 1254 5211 552" wire:model="contact_number"
                    class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4" />
                @error('contact_number')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-6">
                <label for="address" class="font-normal block text-dark">Address</label>
                <textarea id="address" rows="1" placeholder="type your address here" wire:model="address"
                    class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4  resize-none"></textarea>
                @error('address')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-6">
                <label for="questions" class="font-normal block text-dark">Questions<span
                        class="text-red-600 ml-2">*</span></label>
                <textarea id="questions" rows="1" placeholder="type your questions here" wire:model="questions"
                    class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4  resize-none"></textarea>
                @error('questions')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            @if ($success)
                <div class="px-4 py-3 text-teal-900 bg-teal-100 border-t-4 border-teal-500 rounded-b shadow-md"
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
            <div class="mb-0 mt-4 text-center">
                <button type="submit"
                    class="bg-gradient-to-r from-primary via-[#D4497A] to-primary hover:from-secondary hover:to-secondary inline-flex items-center justify-center py-4 px-6 rounded text-white text-base font-medium transition duration-300 ease-in-out">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
