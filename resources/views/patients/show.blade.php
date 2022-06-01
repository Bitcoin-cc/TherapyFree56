

@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/patients" title="Go back">Go Back</a>
            </div>
            <div class="pull-left">
                <a class="btn btn-primary" href="{{$patient->id}}/edit/" title="edit">Edit</a>
            </div>
            <div class="pull-left">
                <a class="btn btn-primary" href="delete/{{$patient->id}}" method="POST" title="Delete">Delete</a>
            </div>
            @csrf
                    @method('DELETE')
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>name:</strong>
                {{$patient->name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                {{$patient->Description}}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created</strong>
                {{$patient->created_at}}
            </div>
        </div>
    </div>
@endsection

