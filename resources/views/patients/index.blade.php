@extends('layouts.adapp')
@section('content')
<h1>Patients</h1>
Create A new  
<a href ="/patients/create">Patient</a>

@if(count($patients)>1)
@foreach ($patients as $patient)
<div class="well">
<h2> <a href ="/patients/{{$patient->id}}">{{$patient->name}}</a></h2>
    <h3>Mental Issue : {{$patient->Description}}</h3>
    <small>Issued In : {{$patient->created_at}}</small>

    <a class="btn btn-primary" href="delete/{{$patient->id}}" method="POST" title="Delete">Delete</a>
          




</div>

@endforeach
@else
<p> No Requests Found </p>


@endif

@endsection