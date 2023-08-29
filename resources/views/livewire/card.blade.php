<div>
    <div class="row">
        @foreach($items as $item)
            <div class="col-md-4">
                <div class="card p-3">
                    <div class="card-block">
                        <h4 class="card-title">{{ $item->title }}</h4>
                        <h6 class="card-subtitle text-muted mb-4">{{ $item->url }}</h6>
                        <button class="btn btn-success" wire:click="check({{ $item->id }})">CHECK</button>
                        {{--                <a href="{{ route('', $item->id) }}" class="btn btn-success">CHECK</a>--}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
