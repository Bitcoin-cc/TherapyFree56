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

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
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



<div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Waleed</h2>
        <p class="title">Programmer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>wa@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>




  <div class="column">
    <div class="card">
      <img src="/w3images/team2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>osama</h2>
        <p class="title">Programmer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>os.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/w3images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>zhou</h2>
        <p class="title">programmer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>zho@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <img src="/w3images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Hannson</h2>
        <p class="title">programmer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>han@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>


<div class="column">
    <div class="card">
      <img src="/w3images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2> faiyaz</h2>
        <p class="title">programmer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>faiyaz@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>


@endsection