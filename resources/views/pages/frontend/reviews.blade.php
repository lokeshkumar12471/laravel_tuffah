<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Reviews') }}
        </x-slot>

        @livewire('pagination.frontend.reviews')

    </x-frontend.container>
</x-guest-layout>
