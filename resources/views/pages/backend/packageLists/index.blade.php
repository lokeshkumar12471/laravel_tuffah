<x-app-layout>
    <x-backend.card>

        <x-slot name="title">
            {{ __('Package List') }}
        </x-slot>

        <x-slot name="addbutton">
            <x-backend.a-button href="{{ route('admin.package-list.create') }}">Add</x-backend.a-button>
        </x-slot>

        @livewire('tables.backend.package-list-table')

    </x-backend.card>
</x-app-layout>
