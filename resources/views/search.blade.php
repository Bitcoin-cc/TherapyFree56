@extends('layouts.adapp')
@section('content')

<div class="container">
    <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="q"
                placeholder="Search users"> <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </form>
    <div class="container">
        @if(isset($details))
        <h2> The Search results for <b> {{ $query }} </b> are :</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($details as $patients)
                <tr>
                    <td>{{$patients->name}}</td>
                    <td>{{$patients->Description}}</td> 
                </tr>
                @endforeach
               
            </tbody>
        </table>
        @elseif(isset($message))
        <p>{{ $message }}</p>
        @endif
    </div>
    @endsection