@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/mystyle.css">

<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,700');
 * {
	 box-sizing: border-box;
}
 body {
	 font-family: 'Roboto', sans-serif;
	 background: grey;
}
 #dashboard {
	 margin-left: 20px;
	 padding: 5px;
}
 #dashboard .heading h1 {
	 color: orange;
	 font-size: 1.4rem;
	 font-weight: 400;
	 margin-bottom: 10px;
}
 #dashboard .heading p {
	 color: greenyellow; 
	 /* greenyellow */
	 font-size: 0.8rem;
	 margin-bottom: 10px;
}
 #dashboard .cards {
	 overflow: auto;
	 margin-bottom: 30px;
}
 #dashboard .cards .card {
	 background: olive;
	 /* olive */
	 border-radius: 5px;
	 padding: 10px;
	 overflow: auto;
}
 #dashboard .cards .card .user-img .src {
	 background: grey;
     background-repeat: no-repeat;
	 width: 25px;
	 height: 25px;
	 border-radius: 50%;
	 margin: 0 250px;
	 padding: 5px;
	 position: relative;
 }

 #dashboard .cards .card .user-name {
	 font-size: 1rem;
	 color: aqua;
	 display: block;
	 text-align: center;
	 margin: 10px 0;
}
 #dashboard .cards .card h6 {
	 font-size: 1rem;
	 text-align: center;
}
 #dashboard .cards .card .date {
	 font-size: 0.9rem;
	 display: block;
	 border-left: 5px solid aqua;
	 position: relative;
	 left: -10px;
	 padding: 15px 15px;
	 margin: -10px 0;
     float: left;
	 color: whitesmoke;
}
 #dashboard .cards .card .icon {
	 background: orange;
	 width: 25px;
	 height: 25px;
	 border-radius: 50%;
	 font-size: 0.7rem;
	 color: black;
	 padding: 5px;
	 display: inline-block;
	 text-align: center;
	 vertical-align: middle;
}
 #dashboard .cards .card .ques {
	 font-size: 0.8rem;
	 font-weight: 300;
	 color: white;
     display: inline-block;
}
 #dashboard .col-md-4 {
	 padding: 0 25px;
     display: inline-block;
}
#dashboard .col-md-2 {
	padding: 0 10px;
	display: inline-block;
}
 
#dashboard table {
	width: 75%;

}

#dashboard th {
	border: 1px solid;
	color: cyan;
}
 
#dashboard td {
	padding: 10px 20px;
	color: blue;
}

</style>


</head>
<body>
    <div class="topnav">
        <a class="title" href="/laravelAD/public/" taret="_self">The Therapy Webbo</a>
        <a href="Questionnaire" target="_self">Questionnaire</a>
        <a href="services" target="_self">Services</a>
    </div>
<section id="dashboard">
     <div class="heading">
     <h1>  Dashboard </h1>
     <p> Welcome to The Therapy Webbo </p>
</div>

<div class="cards">
     <div class="card col-md-4">
         <div class="user-img">
         <img src="images/profile.jfif">
     </div>
     <span class="user-name"> Sample Name </span>
</div>

<div class="card col-md-4">
     <h6> Last Questionaire </h6>
     <span class="date"> 21 July, 2021 </span>
     <span class="icon col-md-2"> Q </span>
     <span class="ques col-md-2"> Qeustionaire 1 </span>
</div>

<div class="card col-md-4">
    <h6> Last Appointment </h6>
    <span class="date"> 18 July, 2021 </span>
    <span class="icon col-md-2"> A </span>
    <span class="ques col-md-2"> Appointment 1 </span>
    </div>
<hr>
<hr>
<h3> Service History</h3>
<table>
<thead>
<tr>
<th> SERVICE </th>
<th> TYPE </th>
<th> DATE </th>
<th> STATUS </th>
</tr>
</thead>
<tbody>
<tr>
<td> Questionaire 1 </td>
<td> Questionaire </td>
<td> 21 July, 2021 </td>
<td> Completed </td>
</tr>
<tr>
<td> Appointment 1 </td>
<td> Appointment </td>
<td> 18 July, 2021 </td>
<td> Completed </td>
</tr>
</tbody>
</table>
</section>
</body>
</html>
@endsection