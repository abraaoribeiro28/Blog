@if($errors->any())
    <div class="alert alert-icon alert-danger mt-3 px-3" role="alert">
        @foreach($errors->all() as $error)
            <i class="ni ni-alert-circle" style="font-size: 1rem;"></i>
            <strong>{{ $error }}</strong> <br>
        @endforeach
    </div>
@endif
