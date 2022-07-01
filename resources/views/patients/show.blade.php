@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  </h2>
            </div>
            
            
          
            @csrf
                    @method('DELETE')
        </div>
    </div>

    <div class="row">
        <div style="text-align:center;"class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3>Name:
                {{$patient->name}} </h3>
            </div>
        </div>
        <div style="text-align:center;"class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3>Description
                {{$patient->Description}} </h3>
            </div>
        </div>
        
        <div style="text-align:center;"class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3>Date Created :
                {{$patient->created_at}} </h3>
            </div>
        </div>

        <div style="text-align:center;"class="pull-left">
            <a class="btn btn-primary" href="{{$patient->id}}/edit/" title="edit">Edit</a>
            <a class="btn btn-primary" href="/delete/{{$patient->id}}" method="POST" title="Delete">Delete</a>
            <a class="btn btn-primary" href="/patients" title="Go back">Go Back</a>
        </div>
    </div>
@endsection

