<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 text-center">
    @foreach (['WEST', 'NORTH', 'SOUTH', 'EAST'] as $direction)
        <x-jet-button type="button"
                      wire:loading.attr="disabled"
                      wire:click="steer('{{$direction}}')"
        >
            {{ __($direction) }}
        </x-jet-button>
    @endforeach

    <x-jet-section-border />

    <x-jet-danger-button type="button"
                         wire:loading.attr="disabled"
                         wire:click="newGame()"
    >
        {{ __('New game') }}
    </x-jet-danger-button>
</div>
