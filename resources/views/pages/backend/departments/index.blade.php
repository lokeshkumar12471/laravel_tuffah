<x-app-layout>
    <x-backend.card>

        <x-slot name="title">
            {{ __('Departments') }}
        </x-slot>

        <x-slot name="addbutton">
            <x-backend.a-button href="{{ route('admin.department.create') }}">Add</x-backend.a-button>
        </x-slot>

        @livewire('tables.backend.department-table')

    </x-backend.card>
</x-app-layout>
