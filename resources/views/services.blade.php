@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
</head>
<style>

.topnav {
  background-color: #333;
  overflow: hidden;
}
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
.topnav a.title {
	font-size: 30px;
}
.topnav {
  background-color: #333;
  overflow: hidden;
}

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}



h2 {
  font-size: 45px;
  font-weight: 300;
  margin: 10px;
}

h2 span {
  font-size: 30px;
}

p {
  font-size: 20px;
}


.container {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 25px;
}



.container > div {
    cursor: pointer;
  height: 560px;
  background-size: cover;
  display: flex;
  flex-direction: column;

  align-items: center;
  justify-content: center;
  text-align: center;

}

.container > div:hover {
    transform: scale(0.99);
    opacity: 0.7;
    

}


a:link {
  color: yellow;
  text-decoration: none;
}

.condoc:visited {
  color: black;
  text-decoration: none;
}

.quest:visited {
  color: black;
  text-decoration: none;
}
a:hover {
  color: grey;
  text-decoration: none;
}

a:active {
  color: grey;
  text-decoration: none;
}




.doc {
  background: url('/laravelad/resources/views/images/docpic.jpg');
}

.que {
    background: url('/laravelad/resources/views/images/questio.jpg');
  
}

.footer {
  background-color: #333;
  overflow: hidden;
}
.footer a {
float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.footer a:hover {
  background-color: #ddd;
  color: black;
}
.footer a.active {
  background-color: #04AA6D;
  color: white;
}
.footer {
  background-color: #333;
  overflow: hidden;
}


</style>
<body>
<div class="topnav">
	<a class="title" href="/laravelAD/public" taret="_self">The Therapy Webbo</a>
            
            <a class ="dif"href="articles" taret="_self">Articles</a>

</div>
<!--
<div class = "container">
<p> <a class = "condoc" href="connectWdoc" taret="_self">Connect With A Doctor</a> </p>
<p> <a class = "quest" href="Questionnaire" taret="_self">Take A Questionnaire To Display Mental Status</a></p>
</div>
 
-->

<div class="container">
      <div class="doc">
        <p><a class = "condoc" href="connectWdoc" taret="_self">Connect With a Doctor</a>         </p>
      </div>
      <div class="que">
        <p>      <a class = "quest" href="Questionnaire" taret="_self">Take a Questionnaire</a></p>
      </div>
      

    </div>

    </div>

</div>

<div class="footer">
<a href="Service&Policy" target="_self">Service & Policy</a>
<a href="aboutus" target="_self">About Us</a>
</div>



</html>


</body>
</html>

<!--
put the same website theme
put a footer
design two button that would redierct the user to the services (questioannire and connect with a doctor)




-->
@endsection

