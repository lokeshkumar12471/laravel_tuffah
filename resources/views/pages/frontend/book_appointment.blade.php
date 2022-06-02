<x-guest-layout>

    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Book Appointment') }}
        </x-slot>

        <div class="flex flex-col justify-center items-center -mx-4">
            <div class="px-4 w-full lg:w-5/12 xl:w-4/12">
                <div class="shadow-testimonial rounded-lg border-gray-200 border-2 py-10 px-8 md:p-[60px] lg:p-10 2xl:p-[60px] sm:py-12 sm:px-10 lg:py-12 lg:px-10 wow fadeInUp"
                    data-wow-delay=".2s">
                    @livewire('form.frontend.book-appointment-form', ['team_id' => $team_id])
                </div>
            </div>
        </div>

    </x-frontend.container>
</x-guest-layout>
