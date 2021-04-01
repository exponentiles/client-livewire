<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Exponentiles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @livewire('exponentiles.game')
    </div>
</x-app-layout>
