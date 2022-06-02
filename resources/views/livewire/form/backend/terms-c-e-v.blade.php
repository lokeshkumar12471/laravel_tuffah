<div>
    <form wire:submit.prevent="submit">
        @csrf
        @wire('debounce.200ms')
        <x-backend.ckeditor id="bodyen" lang="EN" name="terms_description" label="Terms Description" required />
        @endwire
        <div class="mt-3">
            <x-backend.submit-button>
                {{ __('Update') }}
            </x-backend.submit-button>
        </div>
    </form>
</div>
