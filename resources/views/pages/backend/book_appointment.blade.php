<x-app-layout>
    <x-backend.card>

        <x-slot name="title">
            {{ __('Book Appointment') }}
        </x-slot>

        @livewire('tables.backend.book-appointment-table')

    </x-backend.card>
</x-app-layout>
