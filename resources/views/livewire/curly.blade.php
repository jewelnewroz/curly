<div>
    <div class="row">
        <div class="col-12">
            <div class="jumbotron">
                <form method="POST" wire:submit.prevent="submit">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <select wire:model="type" class="form-control">
                                <option value="get">GET</option>
                                <option value="get">POST</option>
                                <option value="get">PUT</option>
                            </select>
                        </div>
                        <input type="text" wire:model="endpoint" class="form-control" placeholder="https://google.com"
                               required>
                        <div class="input-group-append">
                            <div class="btn-group">
                                <button class="btn btn-success" type="submit">CHECK</button>
                                <button class="btn btn-secondary" wire:click="expand()" type="button">Param</button>
                            </div>
                        </div>

                    </div>
                </form>
                @if($response)
                    <hr/>
                    <div class="alert alert-{{ $response['status'] }} alert-dismissible fade show" role="alert">
                        <strong>{{ ucfirst($response['status']) }}!</strong> We got status code
                        of {{ $response['statusCode'] }}
                        <button type="button" class="close" wire:click="exit()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <livewire:card/>
</div>
