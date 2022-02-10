@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            <p class=" text-center h4 mb-0">{{$error}}</p>
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success">
        <p class=" text-center h4 mb-0">{{session('success')}}</p>
    </div>
@endif

@if (session('status'))
    <div class="alert alert-info">
        <p class=" text-center h4 mb-0">{{session('status')}}</p>
    </div>
@endif

@if (session('warning'))
    <div class="alert alert-warning">
        <p class=" text-center h4 mb-0">{{session('warning')}}</p>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        <p class=" text-center h4 mb-0">{{session('error')}}</p>
    </div>
@endif
