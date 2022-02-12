@if ($message = Session::get('success'))
<div>
    <button type="button"></button>
    <strong>{{$message}}</strong>

</div>
@endif
@if($message= Session::get('error'))
<div>
    <button type="button"></button>
    <strong>{{$message}}</strong>
</div>

@endif

@if ($errors->any())
@foreach($errors->all() as $error )
<p>{{$error}}</p>
    
@endforeach
@endif