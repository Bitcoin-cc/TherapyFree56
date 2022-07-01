@extends('layouts.adapp')
@section('content')
<h1 style="text-align: center">Patients</h1>

@if(count($patients)>1)
@foreach ($patients as $patient)

<div class="container">

    <div class="list-group">
      
<h2> <a style='text-align:center;'class="list-group-item list-group-item-action active" href ="/patients/{{$patient->id}}">{{$patient->name}}</a></h2>
    <h3 style='text-align:center;'class="list-group-item list-group-item-action">Mental Issue : {{$patient->Description}}</h3>
    <small style='text-align:center;'class="list-group-item list-group-item-action">Issued In : {{$patient->created_at}}</small>

    <a style='text-align:center; background-color:rgb(185, 56, 82); color:antiquewhite'class="list-group-item list-group-item-action btn-btn danger " href="/delete/{{$patient->id}}" method="POST" title="Delete">Delete</a>
          

</div>
</div>
</div>
@endforeach
@else
<p> No Requests Found </p>


@endif

@endsection