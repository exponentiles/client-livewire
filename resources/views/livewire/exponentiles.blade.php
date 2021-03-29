<div>
  <div class="w-1/2 mx-auto">
    <div class="h-96 grid grid-cols-4 grid-flow-row gap-4 text-black text-lg font-mono px-8 pt-8">
      @foreach($this->tiles as $tile)
        <div class="bg-blue-300 rounded-md flex items-center justify-center text-2xl font-bold">
          {{ $tile }}
        </div>
      @endforeach
    </div>
  </div>
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

</div>
