<div class="flex space-x-1">
    <label for="{{ $rating }}1">
        <input hidden wire:model="{{ $rating }}" type="radio" id="{{ $rating }}1" name="{{ $rating }}"
            value="1" />
        <svg class="cursor-pointer block w-8 h-8 @if ($rating . '()' >= 1) text-primary @else text-grey @endif "
            fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path
                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
        </svg>
    </label>
    <label for="{{ $rating }}2">
        <input hidden wire:model="{{ $rating }}" type="radio" id="{{ $rating }}2" name="{{ $rating }}"
            value="2" />
        <svg class="cursor-pointer block w-8 h-8 @if ($rating . '()' >= 2) text-primary @else text-grey @endif "
            fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path
                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
        </svg>
    </label>
    <label for="{{ $rating }}3">
        <input hidden wire:model="{{ $rating }}" type="radio" id="{{ $rating }}3"
            name="{{ $rating }}" value="3" />
        <svg class="cursor-pointer block w-8 h-8 @if ($rating . '()' >= 3) text-primary @else text-grey @endif "
            fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path
                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
        </svg>
    </label>
    <label for="{{ $rating }}4">
        <input hidden wire:model="{{ $rating }}" type="radio" id="{{ $rating }}4"
            name="{{ $rating }}" value="4" />
        <svg class="cursor-pointer block w-8 h-8 @if ($rating . '()' >= 4) text-primary @else text-grey @endif "
            fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path
                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
        </svg>
    </label>
    <label for="{{ $rating }}5">
        <input hidden wire:model="{{ $rating }}" type="radio" id="{{ $rating }}5"
            name="{{ $rating }}" value="5" />
        <svg class="cursor-pointer block w-8 h-8 @if ($rating . '()' >= 5) text-primary @else text-grey @endif "
            fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path
                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
        </svg>
    </label>
</div>
@error("{{ $rating }}")
    <span class="text-red-600">{{ $message }}</span>
@enderror
