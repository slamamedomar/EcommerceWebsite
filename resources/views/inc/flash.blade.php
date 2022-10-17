@if ( $message = Session::get('success') )
<div class="alert alert-soft-success d-flex align-items-center" role="alert">
    <p class="mb-0 flex-1">{{$message}}</p><button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


@if ( $message = Session::get('error') )
<div class="alert alert-outline-danger d-flex align-items-center" role="alert">
<p class="mb-0 flex-1">{{$message}}</p><button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

