<x-backend.custom-form back='true'>
    <x-slot name="title">{{ __('Team') }}</x-slot>
    @if ($action == 'create')
        <form wire:submit.prevent="store">
        @elseif($action == 'edit')
            <form wire:submit.prevent="update">
            @else
                <form id="form">
    @endif
    @csrf

    @wire('debounce.200ms')
    <x-form-input name="name" label="Name" type="text" />

    <x-form-input name="qualification" label="Qualification" type="text" />

    <x-form-select name="department_id" label="Department Name" :options="Helper::getKeyValues('Department', 'name', 'id')" placeholder="Please Select" />

    <x-form-textarea name="profile" label="Profile" required />

    <x-form-input name="experience" label="Experience(Started At)" type="date" />

    <x-backend.single-upload name="image" label="Image" />

    @if (!is_null($department_id))
        <x-form-label>
            <x-slot name="label">Services List</x-slot>
        </x-form-label>
        <div class="mx-8 mt-2">
            @foreach ($services as $key => $item)
                <div class="flex flex-col">
                    <label class="flex items-center">
                        <input
                            class='float-left w-4 h-4 mt-1 -ml-6 bg-center bg-no-repeat border border-blue-500 rounded'
                            type="checkbox" value="{{ $key }}" wire:model="services.{{ $key }}"
                            name='services[]' />
                        <span class="ml-2">{{ $item }}</span>
                    </label>
                    <x-form-errors :name="$services" />
                </div>
            @endforeach
        </div>
    @endif
    @endwire

    <div class="mt-3">
        @if ($action == 'create')
            <x-backend.submit-button>
                {{ __('Save') }}
            </x-backend.submit-button>
        @elseif($action == 'edit')
            <x-backend.submit-button>
                {{ __('Update') }}
            </x-backend.submit-button>
        @else
        @endif
    </div>
    </form>
</x-backend.custom-form>
