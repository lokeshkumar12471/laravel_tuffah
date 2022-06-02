<x-app-layout>
    <x-backend.card>
        <x-slot name="title">
            {{ __('Home Page') }}
        </x-slot>

        @livewire('form.backend.home-page-c-e-v')
    </x-backend.card>
    <x-backend.card>

        <x-slot name="title">
            {{ __('Sliders') }}
        </x-slot>

        <x-slot name="addbutton">
            <x-backend.a-button href="{{ route('admin.slider.create') }}">Add</x-backend.a-button>
        </x-slot>

        @livewire('tables.backend.slider-table')

    </x-backend.card>
    <x-backend.card>

        <x-slot name="title">
            {{ __('Features') }}
        </x-slot>

        <x-slot name="addbutton">
            <x-backend.a-button href="{{ route('admin.feature.create') }}">Add</x-backend.a-button>
        </x-slot>

        @livewire('tables.backend.feature-table')

    </x-backend.card>
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
