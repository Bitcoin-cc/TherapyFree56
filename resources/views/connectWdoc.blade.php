@extends('layouts.app')
@section('content')
<h1>Add Patients</h1>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="home" taret="_self">Back </a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('patients.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="Description" placeholder="Description"></textarea>
            </div>
        </div>

    <script type="text/javascript">
        function show_alert() {
            alert("Issue Sent To the Doctor Check Your Home Page For more Info");
        }
    </script>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              
                <button class="btn btn-primary" href="home"  type="submit" onclick="show_alert()" value="Show alert box">Submit </button>
        </div>

      
        
   


</form>
@endsection