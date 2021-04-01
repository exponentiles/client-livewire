<?php

namespace App\Http\Livewire\Exponentiles;

use Exponentiles\Engine\Engine;
use Exponentiles\Engine\Tile;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Game extends Component
{
    /**
     * @var array<int, Tile>
     */
    public array $tiles;

    private Engine $engine;

    public function mount()
    {
        $this->engine = new Engine();

        if (Cache::missing('game-tiles')) {
            $this->engine->start();

            Cache::put('game-tiles', $this->engine->export());
        }

        $this->engine->import(
            Cache::get('game-tiles')
        );

        $this->tiles = collect($this->engine->grid->tiles)
            ->collapse()
            ->toArray();
    }

    public function steer(string $direction)
    {
        $this->engine = new Engine();

        $this->engine->import(
            Cache::get('game-tiles')
        );

        $this->engine->steer($direction);
        $this->engine->addTile();

        Cache::put('game-tiles', $this->engine->export());

        $this->tiles = collect($this->engine->grid->tiles)
            ->collapse()
            ->toArray();
    }

    public function newGame()
    {
        $this->engine = new Engine();

        $this->engine->start();

        Cache::put('game-tiles', $this->engine->export());

        $this->tiles = collect($this->engine->grid->tiles)
            ->collapse()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.exponentiles.game');
    }
}
