<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Http;
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

    public function check($id)
    {
        try {
            $item = Item::find($id);
            $request = Http::get($item->url);
            dd($request);
        } catch (\Exception $exception) {
            dd($exception);
        }
    }
}
