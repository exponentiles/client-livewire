<?php

namespace App\Http\Livewire\Exponentiles;

use Livewire\Component;

class Tile extends Component
{
    public $tile;

    public function render()
    {
        return view('livewire.exponentiles.tile');
    }
}
