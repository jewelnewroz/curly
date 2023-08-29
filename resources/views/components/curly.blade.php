<div>
    <div class="row">
        <div class="col-12">
            <div class="jumbotron">
                <form action="" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">URL</span>
                        </div>
                        <input type="text" class="form-control" placeholder="https://example.com"
                               aria-label="Username"
                               aria-describedby="basic-addon1" required>
                        <div class="input-group-append">
                            <button class="btn btn-success" type="button">CHECK</button>
                        </div>
                    </div>
                </form>
                @if($response)
                    <hr/>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
