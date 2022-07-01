@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <style>
    .centeroo {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
      }
    </style>
<body>

<form action="{{route('payment')}}" method="post">

    @csrf

    <input type="hidden" name="amount" value="199">

<h1 style="text-align: center;" > Pay 199$ For A 180 Days Subscirption </h1>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<button class="centeroo"type="submit"><img src="https://cdn.pixabay.com/photo/2015/05/26/09/37/paypal-784404_960_720.png"  class="centeroo" /></button>
</form>

</body>
</html>
@endsection