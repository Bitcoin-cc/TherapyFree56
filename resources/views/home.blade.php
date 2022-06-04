@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                             <h1>Home</h1>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              
                    {{ __('You are logged in!') }}
                   click here If you have Admin Access <a href="/admin/home" target="_self">Admin Panel</a>
                   <a href="articles" taret="_self">Articles</a>
                   <a href="Service&Policy" taret="_self">Services&Policy</a>
                   <a href="Questionnaire" taret="_self">Questionnaire</a>
                   <a href="services" taret="_self">services</a>
                   <a href="faq" taret="_self">faq</a>
                   <a href="dashboard" taret="_self">dashboard</a>
                   <a href="aboutus" taret="_self">About Us</a>
                   <a href="connectWdoc" taret="_self">Connect With a Doctor</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection








