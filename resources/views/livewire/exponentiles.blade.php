<div>
    <div class="h-64 grid grid-cols-3 grid-flow-row gap-4 text-gray-300">
        @foreach(range(1, 9) as $index)
            <div class="bg-blue-500 rounded-md flex items-center justify-center text-2xl font-extrabold">
                {{ $index }}
            </div>
        @endforeach
    </div>
</div>
