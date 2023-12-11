@if (Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
@endif

@foreach($errors->all() as $success)
    <p class="alert alert-success"> {{$success}}</p>
@endforeach


