<?php

namespace App\Http\Livewire;

use Exponentiles\Engine\Engine;
use Exponentiles\Engine\Tile;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Exponentiles extends Component
{
    /**
     * @var array<int, Tile>
     */
    public array $tiles;

    private Engine $engine;

    public function mount()
    {
        $this->engine = new Engine();

        if (Cache::missing('game')) {
            $this->engine->start();

            Cache::put('game', $this->engine->grid->toArray());
        }

        $this->engine->grid->fromArray(
            Cache::get('game')
        );

        $this->tiles = collect($this->engine->grid->tiles)
            ->collapse()
            ->toArray();
    }

    public function steer(string $direction)
    {
        $this->engine = new Engine();

        $this->engine->grid->fromArray(
            Cache::get('game')
        );

        $this->engine->steer($direction);
        $this->engine->addTile();

        Cache::put('game', $this->engine->grid->toArray());

        $this->tiles = collect($this->engine->grid->tiles)
            ->collapse()
            ->toArray();
    }

    public function newGame()
    {
        $this->engine = new Engine();

        $this->engine->start();

        Cache::put('game', $this->engine->grid->toArray());

        $this->tiles = collect($this->engine->grid->tiles)
            ->collapse()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.exponentiles');
    }
}
