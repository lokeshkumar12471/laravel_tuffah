<x-app-layout>
    <x-backend.card>
        <x-slot name="title">
            {{ __('About Us') }}
        </x-slot>

        <x-slot name="addbutton">
            <x-backend.a-button href="{{ route('admin.about.create') }}">Add</x-backend.a-button>
        </x-slot>

        @livewire('tables.backend.about-table')

    </x-backend.card>
</x-app-layout>
