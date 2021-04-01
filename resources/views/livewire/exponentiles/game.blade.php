<div>
    <div class="container"
         x-data="{}"
         x-on:keydown.arrow-up.window="$wire.steer('NORTH')"
         x-on:keydown.arrow-down.window="$wire.steer('SOUTH')"
         x-on:keydown.arrow-right.window="$wire.steer('EAST')"
         x-on:keydown.arrow-left.window="$wire.steer('WEST')"
    >

        <div class="above-game">
            <p class="game-intro">Join the numbers and get to the <strong>2048 tile!</strong></p>
            <a class="restart-button" wire:click="newGame()">New Game</a>
        </div>

        <div class="game-container">
            <div class="game-message">
                <p></p>
                <div class="lower">
                    <a class="keep-playing-button">Keep going</a>
                    <a class="retry-button">Try again</a>
                </div>
            </div>

            <div class="grid-container">
                <div class="grid-row">
                    <div class="grid-cell"></div>
                    <div class="grid-cell"></div>
                    <div class="grid-cell"></div>
                    <div class="grid-cell"></div>
                </div>
                <div class="grid-row">
                    <div class="grid-cell"></div>
                    <div class="grid-cell"></div>
                    <div class="grid-cell"></div>
                    <div class="grid-cell"></div>
                </div>
                <div class="grid-row">
                    <div class="grid-cell"></div>
                    <div class="grid-cell"></div>
                    <div class="grid-cell"></div>
                    <div class="grid-cell"></div>
                </div>
                <div class="grid-row">
                    <div class="grid-cell"></div>
                    <div class="grid-cell"></div>
                    <div class="grid-cell"></div>
                    <div class="grid-cell"></div>
                </div>
            </div>

            <div class="tile-container" wire:click="steer('SOUTH')">
                @foreach($this->tiles as $tile)
                    @if ($tile->isEmpty())
                        @continue
                    @endif

                    <x-exponentiles.tile :tile="$tile" :key="$tile->id" />
                @endforeach
            </div>
        </div>

        <p class="game-explanation">
            <strong class="important">How to play:</strong> Use your <strong>arrow keys</strong> to move the tiles. When two tiles with the same number touch, they <strong>merge into one!</strong>
        </p>
        <hr>
        <p>
            Created by
            <a href="https://github.com/jstoone" target="_blank">@jstoone</a>
            - as a port of <a href="http://gabrielecirulli.com" target="_blank">2048 by Gabriele Cirulli.</a>
        </p>
    </div>
</div>
