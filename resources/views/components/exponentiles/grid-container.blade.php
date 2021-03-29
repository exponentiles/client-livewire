<div class="grid-container text-center">
    @foreach(range(1, 4) as $row)
        <div class="grid-row">
        @foreach(range(1, 4) as $cell)
            <div class="grid-cell">0</div>
        @endforeach
        </div>
    @endforeach
</div>
