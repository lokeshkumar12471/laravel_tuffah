<x-app-layout>
    <x-backend.card>

        <x-slot name="title">
            {{ __('Packages') }}
        </x-slot>

        <x-slot name="addbutton">
            <x-backend.a-button href="{{ route('admin.package.create') }}">Add</x-backend.a-button>
        </x-slot>

        @livewire('tables.backend.package-table')

    </x-backend.card>
</x-app-layout>
