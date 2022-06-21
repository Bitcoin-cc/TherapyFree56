@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/mystyle.css">
    <title></title>
</head>
<body>
   <form action="questionnaire.php" method="post">
     <p>Do you feel pleasant?</p>
     <input type="number" name="ans1">
     <p>Do you feel nervous and restless?</p>
     <input type="number" name="ans2">
     <p>Do you feel satisfied with yourself?</p>
     <input type="number" name="ans3">
     <p>Do you wish you could be as happy as others seem to be?</p>
     <input type="number" name="ans4">
     <p>Do you feel like a failure?</p>
     <input type="number" name="ans5">
     <p>Click submit</p>
   <input type="submit">
</body>
</html>

@endsection