@if($errors->any())
    <div class="alert alert-icon alert-danger mt-3 px-3" role="alert">
        @foreach($errors->all() as $error)
            <i class="ni ni-alert-circle" style="font-size: 1rem;"></i>
            <strong>{{ $error }}</strong> <br>
        @endforeach
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success alert-dismissible alert-icon mt-3">
        <em class="icon ni ni-check-circle"></em>
        <strong>{{ session('success') }}</strong>
        <button class="close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible alert-icon mt-3">
        <em class="icon ni ni-cross-circle"></em>
        <strong>{{ session('error') }}</strong>
        <button class="close" data-bs-dismiss="alert"></button>
    </div>
@endif
