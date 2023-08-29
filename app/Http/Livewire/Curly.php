<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Curly extends Component
{
    public array $response = [];
    public ?string $endpoint = "https://google.com";
    public array $params = [];
    public string $type = 'get';
    protected $listeners = ['check', 'setEndpoint', 'setParams', 'setType', 'setResponse'];

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
            $this->response = [];
            $this->validate();
            $request = Http::get($this->endpoint);
            $this->setResponse([
                'statusCode' => $request->status(),
                'body' => $request->body(),
                'json' => $request->json(),
                'status' => $request->successful() ? 'success' : 'danger'
            ]);
        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function exit()
    {
        $this->response = [];
    }

    public function setResponse(array $response)
    {
        $this->response = $response;
    }

    public function setEndpoint(string $endpoint)
    {
        $this->endpoint = $endpoint;
    }
}
