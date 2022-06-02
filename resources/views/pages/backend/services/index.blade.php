<x-app-layout>
    <x-backend.card>

        <x-slot name="title">
            {{ __('Services') }}
        </x-slot>

        <x-slot name="addbutton">
            <x-backend.a-button href="{{ route('admin.service.create') }}">Add</x-backend.a-button>
        </x-slot>

        @livewire('tables.backend.service-table')

    </x-backend.card>
</x-app-layout>
