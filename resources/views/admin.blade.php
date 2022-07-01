@extends('layouts.adapp')
@section('content')


<div class="hero vh-100 d-flex align-items-center bg-primary " id="home">
    <div class="container">
        <div class="hero-image">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center">
           
                <h1 class="display-4 text-white">BitTherapy Admin Page</h1>
                <p class="text-white my-3">Welcome Dr. {{ Auth::user()->name }}   !</p>

    
                <div class="container ">
                    <div class="row justify-content-center ">
                        <div class="col-md-8 ">
                            <div class="card ">
                                <div class="card-header">{{ __('Search Patients') }}</div>
                
                                                       
                
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
                
                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                
                                   
                                   Welcome Dr. {{ Auth::user()->name }} 
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

            </div>
            </div>
        </div>
    </div>
    </div>

</section>
@endsection

