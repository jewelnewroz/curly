<div>
    <div class="row">
        <div class="col-12">
            <div class="jumbotron">
                <form method="POST" wire:submit.prevent="submit">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">URL</span>
                        </div>
                        <input type="text" wire:model="endpoint" class="form-control" placeholder="https://google.com" required>
                        <div class="input-group-append">
                            <button class="btn btn-success" wire:click. type="submit">CHECK</button>
                        </div>
                    </div>
                </form>
                @if($response)
                    <hr/>
                    <div class="alert alert-{{ $response['status'] }} alert-dismissible fade show" role="alert">
                        <strong>{{ ucfirst($response['status']) }}!</strong> We got status code of {{ $response['statusCode'] }}
                        <button type="button" class="close" wire:click="exit()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <livewire:card />
</div>
