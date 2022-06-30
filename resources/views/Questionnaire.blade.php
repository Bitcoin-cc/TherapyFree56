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

<body>
    <h2>Mental Health Questionnaire</h2>
  
    <!-- Create Form -->
    <form id="form">
 
        <!-- Details -->
        <div class="form-control">
            <label for="name" id="label-name">
                Name
            </label>
 
            <!-- Input Type Text -->
            <input type="text"
                   id="name"
                   placeholder="Enter your name" />
        </div>
  
        <div class="form-control">
            <label for="email" id="label-email">
                Email
            </label>
 
            <!-- Input Type Email-->
            <input type="email"
                   id="email"
                   placeholder="Enter your email" />
        </div>
  
        <div class="form-control">
            <label for="age" id="label-age">
                Age
            </label>
 
            <!-- Input Type Text -->
            <input type="text"
                   id="age"
                   placeholder="Enter your age" />
        </div>
  
        <div class="form-control">
            <label for="q-1" id="label-q-1">
            Do you feel pleasant?
            </label>
             
            <!-- Dropdown options -->
            <select name="q-1" id="q-1">
                <option value="yes1">Yes</option>
                <option value="no1">No</option>
                <option value="maybe1">I don't know</option>
            </select>
        </div>

        <div class="form-control">
            <label for="q-2" id="label-q-2">
            Do you feel nervous and restless?
            </label>
             
            <!-- Dropdown options -->
            <select name="q-2" id="q-2">
                <option value="yes2">Yes</option>
                <option value="no2">No</option>
                <option value="maybe2">I don't know</option>
            </select>
        </div>

        <div class="form-control">
            <label for="q-3" id="label-q-3">
            Do you feel satisfied with yourself?
            </label>
             
            <!-- Dropdown options -->
            <select name="q-3" id="q-3">
                <option value="yes3">Yes</option>
                <option value="no3">No</option>
                <option value="maybe3">I don't know</option>
            </select>
        </div>

        <div class="form-control">
            <label for="q-4" id="label-q-4">
            Do you wish you could be as happy as others seem to be?
            </label>
             
            <!-- Dropdown options -->
            <select name="q-4" id="q-4">
                <option value="yes4">Yes</option>
                <option value="no4">No</option>
                <option value="maybe4">I don't know</option>
            </select>
        </div>

        <div class="form-control">
            <label for="q-5" id="label-q-5">
            Do you feel like a failure?
            </label>
             
            <!-- Dropdown options -->
            <select name="q-5" id="q-5">
                <option value="yes5">Yes</option>
                <option value="no5">No</option>
                <option value="maybe5">I don't know</option>
            </select>
        </div>

        <div class="form-control">
            <label for="q-6" id="label-q-6">
            How anxious do you feel in public places?
            <small>(select number to reflect your answer highest being 5)</small>
            </label>
             
            <!-- Dropdown options -->
            <select name="q-6" id="q-6">
                <option value="number0">0</option>
                <option value="number1">1</option>
                <option value="number2">2</option>
                <option value="number3">3</option>
                <option value="number4">4</option>
                <option value="number5">5</option>
            </select>
        </div>

        <div class="form-control">
            <label for="q7" id="label-q7">
            How depressed do you feel on a regular basis?
            <small>(select number to reflect your answer highest being 5)</small>
            </label>
             
            <!-- Dropdown options -->
            <select name="q7" id="q7">
                <option value="optn0">0</option>
                <option value="optn1">1</option>
                <option value="optn2">2</option>
                <option value="optn3">3</option>
                <option value="optn4">4</option>
                <option value="optn5">5</option>
            </select>
        </div>
  
        <div class="form-control">
            <label>Any prior diagnosed condition
                <small>(Check all that apply)</small>
            </label>
            <!-- Input Type Checkbox -->
            <label for="inp-1">
                <input type="checkbox"
                       name="inp">Anxiety</input></label>
            <label for="inp-2">
                <input type="checkbox"
                       name="inp">Anger</input></label>
            <label for="inp-3">
                <input type="checkbox"
                       name="inp">Borderline Personality Disorder</input></label>
            <label for="inp-4">
                <input type="checkbox"
                       name="inp">Depression</input></label>
            <label for="inp-5">
                <input type="checkbox"
                       name="inp">Eating Disorder</input></label>
            <label for="inp-6">
                <input type="checkbox"
                       name="inp">Grief</input></label>
            <label for="inp-7">
                <input type="checkbox"
                       name="inp">Stress</input></label>
            <label for="inp-7">
                <input type="checkbox"
                       name="inp">Autism</input></label>
            <label for="inp-7">
                <input type="checkbox"
                       name="inp">Schizophernia</input></label>
        </div>
  
        <div class="form-control">
            <label for="comment">
                Any comments or suggestions
            </label>
 
            <!-- multi-line text input control -->
            <textarea name="comment" id="comment"
                placeholder="Enter your comment here">
            </textarea>
        </div>

        <script type="text/javascript">
            function show_alert() {
                alert("You are advised to check our articles. If you have anymore questions then you can consult with a doctor using our services.");
            }
        </script>
  
        <!-- Multi-line Text Input Control -->
        <button href="articles"  type="submit" onclick="show_alert()" value="Show alert box"> Submit </button>
    </form>
</body>
  
</html>

@endsection
