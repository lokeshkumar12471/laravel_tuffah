<x-app-layout>
    <x-backend.card>

        <x-slot name="title">
            {{ __('Counts') }}
        </x-slot>

        <x-slot name="addbutton">
            <x-backend.a-button href="{{ route('admin.count.create') }}">Add</x-backend.a-button>
        </x-slot>

        @livewire('tables.backend.count-table')

    </x-backend.card>
</x-app-layout>
