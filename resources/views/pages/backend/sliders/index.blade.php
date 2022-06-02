<x-app-layout>
    <x-backend.card>

        <x-slot name="title">
            {{ __('Sliders') }}
        </x-slot>

        <x-slot name="addbutton">
            <x-backend.a-button href="{{ route('admin.slider.create') }}">Add</x-backend.a-button>
        </x-slot>

        @livewire('tables.backend.slider-table')

    </x-backend.card>
</x-app-layout>
