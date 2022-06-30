@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
    <title>
        Questionnaire
    </title>
 
    <style>
           body {
            background-color: #05c46b;
            font-family: Verdana;
            text-align: center;
           }
        
           form {
            background-color: #fff;
            max-width: 500px;
            margin: 50px auto;
            padding: 30px 20px;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
           }
           
           .form-control {
            text-align: left;
            margin-bottom: 25px;
           }
           
           .form-control label {
            display: block;
            margin-bottom: 10px;
           }
           
           .form-control input,
           .form-control select,
           .form-control textarea {
            border: 1px solid #777;
            border-radius: 2px;
            font-family: inherit;
            padding: 10px;
            display: block;
            width: 95%;
           }
 

           .form-control input[type="radio"],
           .form-control input[type="checkbox"] {
            display: inline-block;
            width: auto;
           }
 
           button {
            background-color: #05c46b;
            border: 1px solid #777;
            border-radius: 2px;
            font-family: inherit;
            font-size: 21px;
            display: block;
            width: 100%;
            margin-top: 50px;
            margin-bottom: 20px;
           }
    </style>
</head>

@endsection
