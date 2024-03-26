<div>
    @if (session()->has('message'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}

        </div>

    @endif
</div>
