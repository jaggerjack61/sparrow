@if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible mt-3 mx-2 p-3" role="alert">
        {{ session()->get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>


@elseif(session()->has('success'))
    <div class="alert alert-success alert-dismissible mt-3 mx-2 p-3" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif
