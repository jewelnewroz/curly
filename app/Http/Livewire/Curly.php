<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Curly extends Component
{
    public $response = null;
    public ?string $endpoint = "https://google.com";

    public function rules(): array
    {
        return [
            'endpoint' => 'string|required|url'
        ];
    }

    public function render()
    {
        return view('livewire.curly');
    }

    public function submit()
    {
        try {
            $this->validate();
            $request = Http::get($this->endpoint);
            $this->response = [
                'statusCode' => $request->status(),
                'body' => $request->body(),
                'json' => $request->json(),
                'status' => $request->successful() ? 'success' : 'danger'
            ];
        } catch (\Exception $exception) {
            dd($exception);
        }
    }
}
