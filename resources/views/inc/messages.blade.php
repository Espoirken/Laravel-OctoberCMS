@if (count($errors) > 0)
@foreach ($errors->all() as $error)
    <div class="callout alert-callout warning">
        {{$error}}
    </div>
@endforeach
@endif

@if (session('success'))
    <div class="callout alert-callout success">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="callout alert-callout danger">
        {{session('error')}}
    </div>
@endif