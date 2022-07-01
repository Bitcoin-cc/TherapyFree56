@extends('layouts.app')

@section('content')

<!DOCTYPE HTML>
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.ocolumn {
  float: center;
  width: 19.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.ocard {
  box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}



.pcontainer {
  padding: 0 16px;
}

.pcontainer::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}



</style>



<p></p>
<p></p>
<p></p>
<p></p>
<h2 style="text-align:center">Bit Therapy Team</h2>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<div class="row">
  <div class="ocolumn">
    <div class="ocard">
 
      <div class="pcontainer">
        <h2>Waleed</h2>
        <p class="title">Software Engineer </p>
        <p>a Software Engineering Student at UTM</p>
        <p>wa@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>




  <div class="ocolumn">
    <div class="ocard">
     
      <div class="pcontainer">
        <h2>Osama</h2>
        <p class="title">Software Engineer</p>
        <p>a Software Engineering Student at UTM</p>
        <p>os@hotmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="ocolumn">
    <div class="ocard">

      <div class="pcontainer">
        <h2>zhou</h2>
        <p class="title">Software Engineer</p>
        <p>a Software Engineering Student at UTM</p>
        <p>zho@hotmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>


<div class="ocolumn">
    <div class="ocard">

      <div class="pcontainer">
        <h2>Hannson</h2>
        <p class="title">Software Engineer</p>
        <p>a Software Engineering Student at UTM</p>
        <p>han@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>



<div class="ocolumn">
    <div class="ocard">

      <div class="pcontainer">
        <h2> faiyaz</h2>
        <p class="title">Software Engineer</p>
        <p>a Software Engineering Student at UTM</p>
        <p>faiyaz@gmail.com</p>
        <p><button class="button">Contact</button></p>
        </div>
     </div>
    </div>
  </div>

</div>

<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>

@endsection