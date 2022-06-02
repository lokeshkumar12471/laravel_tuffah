<x-backend.custom-form title="Edit Update Data">
    <form wire:submit.prevent="submit">
        @csrf
        @wire('debounce.200ms')
            <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
                {{ __('Descriptions') }}
            </h4>

            <x-form-textarea name="address" label="Address" />

            <x-form-input name="email" label="Email" type="email" />

            <x-form-input name="contact_no"
                label="Contact No. (If you have multiple numbers please add ; between each number)" type="text" />

            <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
                {{ __('Images') }}
            </h4>
            {{-- Logo Start --}}
            @if ($this->logo)
                <div class="my-4">
                    <div class="mb-2">
                        <label class="block">
                            <x-form-label label="Uploaded Logo Preview" />
                            <img src="{{ $this->logoIsUploaded ? $this->logo->temporaryUrl() : url('storage/' . $this->logo) }}"
                                class="mt-2" width="250" height="300">
                        </label>
                    </div>
                </div>
            @endif

            <div class="my-4">
                <div class="mb-2">
                    <label class="block">
                        <x-form-label label="Logo" />
                        <input type="file" accept="image/*" wire:model="logo"
                            class="block w-full mt-2 text-xl font-normal text-gray-500 border rounded outline-none focus:border-blue-400 focus:shadow">
                    </label>
                </div>
                <x-form-errors name="logo" />
            </div>
            {{-- Logo End --}}

            {{-- Hero Image Start --}}
            @if ($this->hero_image)
                <div class="my-4">
                    <div class="mb-2">
                        <label class="block">
                            <x-form-label label="Uploaded Hero Image Preview" />
                            <img src="{{ $this->HeroImageIsUploaded ? $this->hero_image->temporaryUrl() : url('storage/' . $this->hero_image) }}"
                                class="mt-2" width="250" height="300">
                        </label>
                    </div>
                </div>
            @endif

            <div class="my-4">
                <div class="mb-2">
                    <label class="block">
                        <x-form-label label="Hero Image" />
                        <input type="file" accept="image/*" wire:model="hero_image"
                            class="block w-full mt-2 text-xl font-normal text-gray-500 border rounded outline-none focus:border-blue-400 focus:shadow">
                    </label>
                </div>
                <x-form-errors name="hero_image" />
            </div>
            {{-- Hero Image end --}}

            {{-- Hero Image Start --}}
            @if ($this->count_image)
                <div class="my-4">
                    <div class="mb-2">
                        <label class="block">
                            <x-form-label label="Uploaded Count Image Preview" />
                            <img src="{{ $this->CountImageIsUploaded ? $this->count_image->temporaryUrl() : url('storage/' . $this->count_image) }}"
                                class="mt-2" width="250" height="300">
                        </label>
                    </div>
                </div>
            @endif

            <div class="my-4">
                <div class="mb-2">
                    <label class="block">
                        <x-form-label label="Count Image" />
                        <input type="file" accept="image/*" wire:model="count_image"
                            class="block w-full mt-2 text-xl font-normal text-gray-500 border rounded outline-none focus:border-blue-400 focus:shadow">
                    </label>
                </div>
                <x-form-errors name="count_image" />
            </div>
            {{-- Count Image end --}}

            <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
                {{ __('Video') }}
            </h4>

            <x-form-input name="hero_video" label="Hero Video" type="text" />

            <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
                {{ __('Buttons') }}
            </h4>

            <x-form-input name="tag_action_button_text" label="Tag Button Text" type="text" />

            <x-form-input name="tag_action_button_link" label="Tag Button Link" type="text" />

            <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
                {{ __('Descriptions') }}
            </h4>

            <x-form-textarea name="welcome_message" label="Welcome Message" />

            <x-form-textarea name="mission_message" label="Mission Message" />

            <x-form-textarea name="vision_message" label="Vision Message" />

            <x-form-textarea name="tag_line" label="Tag Line" />

            <x-form-textarea name="services_excerpt" label="Services Excerpt" />

            <x-form-textarea name="count_excerpt" label="Count Excerpt" />

            <x-form-textarea name="review_excerpt" label="Review Excerpt" />

            <x-form-textarea name="team_excerpt" label="Doctor Excerpt" />

            <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
                {{ __('Social Media Links') }}
            </h4>

            <x-form-input name="twitter" label="Twitter" type="text" />

            <x-form-input name="facebook" label="Facebook" type="text" />

            <x-form-input name="instagram" label="Instagram" type="text" />

            <x-form-input name="linkedin" label="Linkedin" type="text" />

            <x-form-input name="youtube" label="Youtube" type="text" />

            <x-form-input name="google_business" label="Google Business" type="text" />

            <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
                {{ __('Google Map & Review APIs') }}
            </h4>

            <x-form-input name="embed_map_link"
                label="Embed Map Link(Directly from Google Maps Search, Share, Embed copy src link & paste)" type="text" />

            <x-form-input name="gr_api"
                label="Google Review API(Follow the Instructions from https://googlereviews.cws.net & paste the value of load_google_reviews from 2nd script)"
                type="text" />

            <x-form-input name="gr_count_api"
                label="Google Review Count API(Follow the Instructions from https://www.review-widget.net & paste the value of data-uuid from script)"
                type="text" />
        @endwire
        <div class="mt-3">
            <x-backend.submit-button>
                {{ __('Update') }}
            </x-backend.submit-button>
        </div>
    </form>
</x-backend.custom-form>
