<div>
    @foreach($items as $item)
    <div class="col-md-4">
        <div class="card p-3">
            <div class="card-block">
                <h4 class="card-title">{{ $item->title }}</h4>
                <h6 class="card-subtitle text-muted">{{ $item->url }}</h6>
                <button class="btn btn-success" wire:click="check({{ $item->id }})">CHECK</button>
            </div>
        </div>
    </div>
    @endforeach
</div>
