<div class="container mt-5">
@if (Session('success'))
    <div class="alert alert-success p-5" role="alert">
        {{ session('success') }}
    </div>
@endif


@if (Session('error'))
    <div class="alert alert-danger p-5" role="alert">
        {{ session('danger') }}
    </div>
@endif


@if (Session('info'))
    <div class="alert alert-primary p-5" role="alert">
        {{ session('info') }}
    </div>
@endif
</div>
