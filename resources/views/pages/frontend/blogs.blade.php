<x-guest-layout>
    <x-frontend.container>
        <x-slot name='banner_name'>
            {{ __('Blogs') }}
        </x-slot>

        @livewire('pagination.frontend.blogs')

    </x-frontend.container>
</x-guest-layout>
