<div>
    <!-- Contact form -->
    <form wire:submit.prevent="submit">
        <div class="mb-6">
            <div class="flex justify-center">
                <div class="mb-3 xl:w-96">
                    <select wire:model='team_id'
                        class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-secondary rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-primary focus:outline-none"
                        aria-label="Default select example">
                        <option selected>Select Doctor</option>
                        @foreach ($team as $key => $item)
                            <option value="{{ $key }}">{{ ucwords(strtolower($item)) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label class="font-normal block text-dark">Patient Name
                <span class="text-red-600 ml-2">*</span>
                <input type="text"
                    class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4"
                    placeholder="Enter Patient name" required wire:model="name" />
            </label>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label class="font-normal block text-dark">Patient Age
                <span class="text-red-600 ml-2">*</span>
                <input type="number"
                    class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4"
                    placeholder="Enter Patient Age in Years" required wire:model="age" />
            </label>
            @error('age')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label class="font-normal block text-dark">Patient Address
                <span class="text-red-600 ml-2">*</span>
                <textarea class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4"
                    placeholder="Enter Patient Address" required wire:model="address"></textarea>
            </label>
            @error('age')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label class="font-normal block text-dark">Phone Number
                <span class="text-red-600 ml-2">*</span>
                <input type="number"
                    class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4"
                    placeholder="Enter your phone number" required wire:model="phone" />
            </label>
            @error('phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label class="font-normal block text-dark">Email
                <input type="email"
                    class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4"
                    placeholder="Enter Email" wire:model="email" />
            </label>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block mb-3 text-sm font-medium text-gray-800 dark:text-gray-300">Gender
                <span class="text-red-600 ml-2">*</span>
                <div class="flex mt-3">
                    <label class="flex items-center mb-2 mr-4">
                        <input type="radio" class="form-radio" name="male" value="male" wire:model='gender' />
                        <span class="font-normal ml-3 text-gray-600 dark:text-gray-400">Male</span>
                    </label>
                    <label class="flex items-center mb-2 mr-2">
                        <input type="radio" class="form-radio" name="female" value="female" wire:model='gender' />
                        <span class="font-normal ml-3 text-gray-600 dark:text-gray-400">FeMale</span>
                    </label>
                    <label class="flex items-center mb-2">
                        <input type="radio" class="form-radio" name="trans" value="trans" wire:model='gender' />
                        <span class="font-normal ml-3 text-gray-600 dark:text-gray-400">Trans</span>
                    </label>
                </div>
            </label>
            @error('gender')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <div class="block mb-3 text-sm font-medium text-gray-800 dark:text-gray-300">Have you previously
                attended our facility?
            </div>
            <div class="flex">
                <label class="flex items-center mb-2 mr-4">
                    <input type="radio" class="form-radio" name="yes" value="1" wire:model='previous_record' />
                    <span class="font-normal ml-3 text-gray-600 dark:text-gray-400">Yes</span>
                </label>
                <label class="flex items-center mb-2">
                    <input type="radio" class="form-radio" name="no" value="0" wire:model='previous_record' />
                    <span class="font-normal ml-3 text-gray-600 dark:text-gray-400">No</span>
                </label>
            </div>
            @error('previous_record')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        @if ($previous_record == '1')
            <div class="flex flex-wrap mb-5 -mx-3">
                <div class="w-full px-3">
                    <label class="font-normal block text-dark">If Yes, state on which condition and when?<span
                            class="text-red-600 ml-2">*</span>
                        <textarea type="text" class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4"
                            placeholder="Enter your Address" required
                            wire:model="previous_record_description"></textarea>
                    </label>
                    @error('previous_record_description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        @endif
        <div class="flex flex-wrap mb-5 -mx-3">
            <div class="w-full px-3 mb-4 md:w-1/2 md:mb-0">
                <label class="font-normal block text-dark">Appointment Date
                    <span class="text-red-600 ml-2">*</span>
                    <input type="date" min="{{ date('Y-m-d') }}"
                        class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4"
                        placeholder="Enter your Age" required wire:model="appointment_date" />
                </label>
                @error('appointment_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full px-3 mb-4 md:w-1/2 md:mb-0">
                <label class="font-normal block text-dark">Appointment Time
                    <span class="text-red-600 ml-2">*</span>
                    <input type="time"
                        class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4"
                        placeholder="Enter your phone number" required wire:model="appointment_time" />
                </label>
                @error('appointment_time')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
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
