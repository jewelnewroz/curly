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
            $this->emitUp('setEndpoint', $item->url);
            $this->emitUp('setResponse', [
                'statusCode' => $request->status(),
                'body' => $request->body(),
                'json' => $request->json(),
                'status' => $request->successful() ? 'success' : 'danger'
            ]);
        } catch (\Exception $exception) {
            dd($exception);
        }
    }
}
