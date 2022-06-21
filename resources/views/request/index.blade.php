@extends('layouts.app')
@section('content')

<h1>Patients</h1>
<h5>Having a Mental Illness? Connect With a
<a href ="/connectWdoc">Doctor</a> </h5>

@if(count($patients)>1)

@foreach ($patients as $patient)


<div class="container">

    <div class="list-group">
    
        <a class="list-group-item list-group-item-action active" href="/home">
   
               <h1> Name:{{$patient->name}}</h1> </a>
               <p></p>
           <h2> Mental Issue : {{$patient->Description}} </h2>
           <p></p>
                 <h3>Issued In : {{$patient->created_at}}</h3>
                 <p></p>
                       
            


        </a> 

        {{-- Name: <a href ="/patients/{{$patient->id}}">{{$patient->name}}</a>  --}}



    </div>
</div>


@endforeach

@else
<p> No Requests Found </p>


@endif

@endsection
