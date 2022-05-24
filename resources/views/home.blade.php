@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
<<<<<<< HEAD
                             <h1>user Home</h1>
=======

>>>>>>> 68c1b536006d0ad0d30f6027c70b46833fe8e80a
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<<<<<<< HEAD
              
                    {{ __('You are logged in!') }}
                   click here to go to your <a href="dashboard" target="_self">Dashboard</a>
                   <a href="articles" taret="_self">Articles</a>
=======

                    {{ __('You are logged in!') }}
                   click here to go to your <a href="dashboard" target="_self">Dashboard</a>
>>>>>>> 68c1b536006d0ad0d30f6027c70b46833fe8e80a
                </div>
            </div>
        </div>
    </div>
</div>
@endsection








