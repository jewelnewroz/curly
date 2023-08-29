<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Card extends Component
{
    public ?Collection $items;

    public function mount()
    {
        $this->items = Item::all();
    }

    public function render()
    {
        return view('livewire.card');
    }
}
