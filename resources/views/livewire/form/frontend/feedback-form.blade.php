<div>
    <form wire:submit.prevent="submit">
        <div class="mb-6">
            <label class="font-normal block text-dark">Type of Appointment<span class="text-red-600 ml-2">*</span></label>
            <div class="flex py-4">
                <div class="form-check form-check-inline mr-4">
                    <input wire:model="type" class="form-radio" type="radio" name="inlineRadioOptions" id="OP"
                        value="OP">
                    <label class="form-check-label inline-block text-gray-800 ml-2" for="OP">OP</label>
                </div>
                <div class="form-check form-check-inline">
                    <input wire:model="type" class="form-radio" type="radio" name="inlineRadioOptions" id="IP"
                        value="IP">
                    <label class="form-check-label inline-block text-gray-800 ml-2" for="IP">IP</label>
                </div>
            </div>
            @error('type')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="name" class="font-normal block text-dark">Name<span class="text-red-600 ml-2">*</span></label>
            <input type="text" id="name" placeholder="Adam Gelius" wire:model="name"
                class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4" />
            @error('name')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="admission_number" class="font-normal block text-dark">Admission Number<span
                    class="text-red-600 ml-2">*</span></label>
            <input type="text" id="admission_number" placeholder="123ABC123" wire:model="admission_number"
                class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4" />
            @error('admission_number')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="phone" class="font-normal block text-dark">Phone<span class="text-red-600 ml-2">*</span></label>
            <input type="text" id="phone" placeholder="+885 1254 5211 552" wire:model="phone"
                class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4" />
            @error('phone')
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
            <label for="how" class="font-normal block text-dark">How do you came to know about Us?<span
                    class="text-red-600 ml-2">*</span></label>
            <textarea id="how" rows="1" placeholder="type your review here" wire:model="how"
                class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4  resize-none"></textarea>
            @error('how')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="initial_response_text" class="font-normal block text-dark">How was your initial response,
                receiving
                and explaining your treatment/emergency?<span class="text-red-600 ml-2">*</span></label>

            <!-- Rating -->
            <div class="flex space-x-1">
                <label for="initial_response_rating1">
                    <input hidden wire:model="initial_response_rating" type="radio" id="initial_response_rating1"
                        name="initial_response_rating" value="1" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($initial_response_rating >= 1) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="initial_response_rating2">
                    <input hidden wire:model="initial_response_rating" type="radio" id="initial_response_rating2"
                        name="initial_response_rating" value="2" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($initial_response_rating >= 2) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="initial_response_rating3">
                    <input hidden wire:model="initial_response_rating" type="radio" id="initial_response_rating3"
                        name="initial_response_rating" value="3" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($initial_response_rating >= 3) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="initial_response_rating4">
                    <input hidden wire:model="initial_response_rating" type="radio" id="initial_response_rating4"
                        name="initial_response_rating" value="4" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($initial_response_rating >= 4) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="initial_response_rating5">
                    <input hidden wire:model="initial_response_rating" type="radio" id="initial_response_rating5"
                        name="initial_response_rating" value="5" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($initial_response_rating >= 5) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
            </div>
            @error($initial_response_rating)
                <span class="text-red-600">{{ $message }}</span>
            @enderror

            <textarea id="initial_response_text" rows="1" placeholder="type your review here" wire:model="initial_response_text"
                class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4  resize-none"></textarea>
            @error('initial_response_text')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="explanation_of_treatment_text" class="font-normal block text-dark">How well are you explained
                about
                your disease and treatment?<span class="text-red-600 ml-2">*</span></label>

            <!-- Rating -->
            <div class="flex space-x-1">
                <label for="explanation_of_treatment_rating1">
                    <input hidden wire:model="explanation_of_treatment_rating" type="radio"
                        id="explanation_of_treatment_rating1" name="explanation_of_treatment_rating" value="1" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($explanation_of_treatment_rating >= 1) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="explanation_of_treatment_rating2">
                    <input hidden wire:model="explanation_of_treatment_rating" type="radio"
                        id="explanation_of_treatment_rating2" name="explanation_of_treatment_rating" value="2" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($explanation_of_treatment_rating >= 2) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="explanation_of_treatment_rating3">
                    <input hidden wire:model="explanation_of_treatment_rating" type="radio"
                        id="explanation_of_treatment_rating3" name="explanation_of_treatment_rating" value="3" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($explanation_of_treatment_rating >= 3) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="explanation_of_treatment_rating4">
                    <input hidden wire:model="explanation_of_treatment_rating" type="radio"
                        id="explanation_of_treatment_rating4" name="explanation_of_treatment_rating" value="4" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($explanation_of_treatment_rating >= 4) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="explanation_of_treatment_rating5">
                    <input hidden wire:model="explanation_of_treatment_rating" type="radio"
                        id="explanation_of_treatment_rating5" name="explanation_of_treatment_rating" value="5" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($explanation_of_treatment_rating >= 5) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
            </div>
            @error($explanation_of_treatment_rating)
                <span class="text-red-600">{{ $message }}</span>
            @enderror

            <textarea id="explanation_of_treatment_text" rows="1" placeholder="type your review here"
                wire:model="explanation_of_treatment_text"
                class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4  resize-none"></textarea>
            @error('explanation_of_treatment_text')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="cost_of_treatment_text" class="font-normal block text-dark">How well are you explained about the
                cost involved in your treatment?<span class="text-red-600 ml-2">*</span></label>

            <!-- Rating -->
            <div class="flex space-x-1">
                <label for="cost_of_treatment_rating1">
                    <input hidden wire:model="cost_of_treatment_rating" type="radio" id="cost_of_treatment_rating1"
                        name="cost_of_treatment_rating" value="1" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($cost_of_treatment_rating >= 1) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="cost_of_treatment_rating2">
                    <input hidden wire:model="cost_of_treatment_rating" type="radio" id="cost_of_treatment_rating2"
                        name="cost_of_treatment_rating" value="2" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($cost_of_treatment_rating >= 2) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="cost_of_treatment_rating3">
                    <input hidden wire:model="cost_of_treatment_rating" type="radio" id="cost_of_treatment_rating3"
                        name="cost_of_treatment_rating" value="3" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($cost_of_treatment_rating >= 3) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="cost_of_treatment_rating4">
                    <input hidden wire:model="cost_of_treatment_rating" type="radio" id="cost_of_treatment_rating4"
                        name="cost_of_treatment_rating" value="4" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($cost_of_treatment_rating >= 4) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="cost_of_treatment_rating5">
                    <input hidden wire:model="cost_of_treatment_rating" type="radio" id="cost_of_treatment_rating5"
                        name="cost_of_treatment_rating" value="5" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($cost_of_treatment_rating >= 5) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
            </div>
            @error($cost_of_treatment_rating)
                <span class="text-red-600">{{ $message }}</span>
            @enderror

            <textarea id="cost_of_treatment_text" rows="1" placeholder="type your review here" wire:model="cost_of_treatment_text"
                class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4  resize-none"></textarea>
            @error('cost_of_treatment_text')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="reception_text" class="font-normal block text-dark">How do you rate the reception?<span
                    class="text-red-600 ml-2">*</span></label>

            <!-- Rating -->
            <div class="flex space-x-1">
                <label for="reception_rating1">
                    <input hidden wire:model="reception_rating" type="radio" id="reception_rating1"
                        name="reception_rating" value="1" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($reception_rating >= 1) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="reception_rating2">
                    <input hidden wire:model="reception_rating" type="radio" id="reception_rating2"
                        name="reception_rating" value="2" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($reception_rating >= 2) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="reception_rating3">
                    <input hidden wire:model="reception_rating" type="radio" id="reception_rating3"
                        name="reception_rating" value="3" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($reception_rating >= 3) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="reception_rating4">
                    <input hidden wire:model="reception_rating" type="radio" id="reception_rating4"
                        name="reception_rating" value="4" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($reception_rating >= 4) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="reception_rating5">
                    <input hidden wire:model="reception_rating" type="radio" id="reception_rating5"
                        name="reception_rating" value="5" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($reception_rating >= 5) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
            </div>
            @error($reception_rating)
                <span class="text-red-600">{{ $message }}</span>
            @enderror

            <textarea id="reception_text" rows="1" placeholder="type your review here" wire:model="reception_text"
                class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4  resize-none"></textarea>
            @error('reception_text')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="dmo_text" class="font-normal block text-dark">Please rate DMO's (Duty Medical Officer) at the
                time
                of admission/stay?<span class="text-red-600 ml-2">*</span></label>

            <!-- Rating -->
            <div class="flex space-x-1">
                <label for="dmo_rating1">
                    <input hidden wire:model="dmo_rating" type="radio" id="dmo_rating1" name="dmo_rating" value="1" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($dmo_rating >= 1) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="dmo_rating2">
                    <input hidden wire:model="dmo_rating" type="radio" id="dmo_rating2" name="dmo_rating" value="2" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($dmo_rating >= 2) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="dmo_rating3">
                    <input hidden wire:model="dmo_rating" type="radio" id="dmo_rating3" name="dmo_rating" value="3" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($dmo_rating >= 3) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="dmo_rating4">
                    <input hidden wire:model="dmo_rating" type="radio" id="dmo_rating4" name="dmo_rating" value="4" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($dmo_rating >= 4) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="dmo_rating5">
                    <input hidden wire:model="dmo_rating" type="radio" id="dmo_rating5" name="dmo_rating" value="5" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($dmo_rating >= 5) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
            </div>
            @error($dmo_rating)
                <span class="text-red-600">{{ $message }}</span>
            @enderror

            <textarea id="dmo_text" rows="1" placeholder="type your review here" wire:model="dmo_text"
                class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4  resize-none"></textarea>
            @error('dmo_text')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="nurse_text" class="font-normal block text-dark">Please rate for nursing staff?<span
                    class="text-red-600 ml-2">*</span></label>

            <!-- Rating -->
            <div class="flex space-x-1">
                <label for="nurse_rating1">
                    <input hidden wire:model="nurse_rating" type="radio" id="nurse_rating1" name="nurse_rating"
                        value="1" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($nurse_rating >= 1) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="nurse_rating2">
                    <input hidden wire:model="nurse_rating" type="radio" id="nurse_rating2" name="nurse_rating"
                        value="2" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($nurse_rating >= 2) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="nurse_rating3">
                    <input hidden wire:model="nurse_rating" type="radio" id="nurse_rating3" name="nurse_rating"
                        value="3" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($nurse_rating >= 3) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="nurse_rating4">
                    <input hidden wire:model="nurse_rating" type="radio" id="nurse_rating4" name="nurse_rating"
                        value="4" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($nurse_rating >= 4) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="nurse_rating5">
                    <input hidden wire:model="nurse_rating" type="radio" id="nurse_rating5" name="nurse_rating"
                        value="5" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($nurse_rating >= 5) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
            </div>
            @error($nurse_rating)
                <span class="text-red-600">{{ $message }}</span>
            @enderror

            <textarea id="nurse_text" rows="1" placeholder="type your review here" wire:model="nurse_text"
                class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4  resize-none"></textarea>
            @error('nurse_text')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="house_keeping_text" class="font-normal block text-dark">Please rate our House keeping?<span
                    class="text-red-600 ml-2">*</span></label>

            <!-- Rating -->
            <div class="flex space-x-1">
                <label for="house_keeping_rating1">
                    <input hidden wire:model="house_keeping_rating" type="radio" id="house_keeping_rating1"
                        name="house_keeping_rating" value="1" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($house_keeping_rating >= 1) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="house_keeping_rating2">
                    <input hidden wire:model="house_keeping_rating" type="radio" id="house_keeping_rating2"
                        name="house_keeping_rating" value="2" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($house_keeping_rating >= 2) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="house_keeping_rating3">
                    <input hidden wire:model="house_keeping_rating" type="radio" id="house_keeping_rating3"
                        name="house_keeping_rating" value="3" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($house_keeping_rating >= 3) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="house_keeping_rating4">
                    <input hidden wire:model="house_keeping_rating" type="radio" id="house_keeping_rating4"
                        name="house_keeping_rating" value="4" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($house_keeping_rating >= 4) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="house_keeping_rating5">
                    <input hidden wire:model="house_keeping_rating" type="radio" id="house_keeping_rating5"
                        name="house_keeping_rating" value="5" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($house_keeping_rating >= 5) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
            </div>
            @error($house_keeping_rating)
                <span class="text-red-600">{{ $message }}</span>
            @enderror

            <textarea id="house_keeping_text" rows="1" placeholder="type your review here" wire:model="house_keeping_text"
                class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4  resize-none"></textarea>
            @error('house_keeping_text')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="satisfaction_of_treatment_text" class="font-normal block text-dark">Are you satisfied with the
                treatment?<span class="text-red-600 ml-2">*</span></label>

            <!-- Rating -->
            <div class="flex space-x-1">
                <label for="satisfaction_of_treatment_rating1">
                    <input hidden wire:model="satisfaction_of_treatment_rating" type="radio"
                        id="satisfaction_of_treatment_rating1" name="satisfaction_of_treatment_rating" value="1" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($satisfaction_of_treatment_rating >= 1) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="satisfaction_of_treatment_rating2">
                    <input hidden wire:model="satisfaction_of_treatment_rating" type="radio"
                        id="satisfaction_of_treatment_rating2" name="satisfaction_of_treatment_rating" value="2" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($satisfaction_of_treatment_rating >= 2) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="satisfaction_of_treatment_rating3">
                    <input hidden wire:model="satisfaction_of_treatment_rating" type="radio"
                        id="satisfaction_of_treatment_rating3" name="satisfaction_of_treatment_rating" value="3" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($satisfaction_of_treatment_rating >= 3) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="satisfaction_of_treatment_rating4">
                    <input hidden wire:model="satisfaction_of_treatment_rating" type="radio"
                        id="satisfaction_of_treatment_rating4" name="satisfaction_of_treatment_rating" value="4" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($satisfaction_of_treatment_rating >= 4) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
                <label for="satisfaction_of_treatment_rating5">
                    <input hidden wire:model="satisfaction_of_treatment_rating" type="radio"
                        id="satisfaction_of_treatment_rating5" name="satisfaction_of_treatment_rating" value="5" />
                    <svg class="cursor-pointer block w-8 h-8 @if ($satisfaction_of_treatment_rating >= 5) text-primary @else text-gray-500 @endif"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </label>
            </div>
            @error($satisfaction_of_treatment_rating)
                <span class="text-red-600">{{ $message }}</span>
            @enderror

            <textarea id="satisfaction_of_treatment_text" rows="1" placeholder="type your review here"
                wire:model="satisfaction_of_treatment_text"
                class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4  resize-none"></textarea>
            @error('satisfaction_of_treatment_text')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label for="any_other_feedback" class="font-normal block text-dark">Any Other feedback!</label>
            <textarea id="any_other_feedback" rows="1" placeholder="type your review here" wire:model="any_other_feedback"
                class="w-full border-0 border-b border-secondary focus:border-primary focus:outline-none py-4  resize-none"></textarea>
            @error('any_other_feedback')
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
