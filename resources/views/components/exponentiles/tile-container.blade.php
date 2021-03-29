@props(['tiles' => []])
<div class="h-96 grid grid-cols-4 grid-flow-row gap-4 text-black text-lg font-mono">
    @foreach($this->tiles as $tile)
        <div class="bg-blue-300 rounded-md flex items-center justify-center text-2xl font-bold">
            {{ $tile }}
        </div>
    @endforeach
</div>
