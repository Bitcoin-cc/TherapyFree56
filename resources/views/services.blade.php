@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">

</head>
<style>


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


.ocontainer {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 25px;
}



.ocontainer > div {
    cursor: pointer;
  height: 560px;
  background-size: cover;
  display: flex;
  flex-direction: column;

  align-items: center;
  justify-content: center;
  text-align: center;

}

.ocontainer > div:hover {
    transform: scale(0.99);
    opacity: 0.7;
    

}


/* a:link {
  color: black;
  text-decoration: none;
} */

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





</style>

<body>
  

<div class="ocontainer">
      <div class="doc">
        <p><a style ="color=black;" class = "condoc" href="connectWdoc" taret="_self">Connect With a Doctor</a>         </p>
      </div>
      <div class="que">
        <p>      <a style ="color=black;" class = "quest" href="Questionnaire" taret="_self">Take a Questionnaire</a></p>
      </div>
      

    </div>

    </div>

</div>



</html>
@endsection

</body>
</html>
