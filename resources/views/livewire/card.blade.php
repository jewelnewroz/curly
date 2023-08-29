<div>
    @foreach($items as $item)
    <div class="col-md-4">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">{{ $item->title }}</h4>
                <h6 class="card-subtitle text-muted">{{ $item->url }}</h6>
                <a href="#" class="card-link">link</a>
                <a href="#" class="card-link">Second link</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
