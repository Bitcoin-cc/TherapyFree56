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

body {
  background: #333;
  color: #fff;
  font-family: 'Roboto', sans-serif;
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


.cocontainer {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 10px;
}



.cocontainer > div {
    cursor: pointer;
  height: 210px;
  background-size: cover;
  display: flex;
  flex-direction: column;

  align-items: center;
  justify-content: center;
  text-align: center;

}

.cocontainer > div:hover {
    transform: scale(0.88);
    opacity: 0.7;
    

}

.aw:link {
  color: white;
  text-decoration: none;
}

.ab:link {
  color: black;
  text-decoration: none;
}

.ag:link {
  color: grey;
  text-decoration: none;
}

.aw:visited {
  color: white;
  text-decoration: none;
}

.ab:visited {
  color: black;
  text-decoration: none;
}

.ag:visited {
  color: grey;
  text-decoration: none;
}
a:active {
  color: grey;
  text-decoration: none;
}

.bg1 {
  background: url('/images/signs-of-anxiety-disorder-2.jpg');
}

.bg2 {
    background: url('/images/frustrated_man.jpg');
  
}

.bg3 {
  background: url('/images/Borderline-Personality.jpg');
  color: black;

}

.bg4 {
  background: url('/images/depression.jpg');
}

.bg5 {
  background: url('/images/fat.jpg');
  color: #333;

}

.bg6 {
  background: url('/images/grieff.webp');
}


.bg7 {
  background: url('/images/stress.jpg');
  color: black;

}

.bg8 {
  background: url('/images/selfteem.jpg');
  color: black;

}

.bg9 {
  background: url('/images/relation.jpg');
  color: #333;

}

.bg10 {
  background: url('/images/mentalhe.jpg');

}

.bg11 {
  background: url('/images/autsi.jpg');
  color: #333;

}


.bg12 {
  background: url('/images/insomnia.jpg');
}

</style>
<body>
  <div class="cocontainer ">

      <div class="bg1">
      <p>      <a class = "aw" href="articles/article1" taret="_self">Anxiety</a></p>
      </div>

      <div class="bg2">
      <p>      <a class = "aw" href="articles/article2" taret="_self">Anger</a></p>
      </div>
      <div class="bg3">
      <p>      <a class = "ab" href="articles/article3" taret="_self">Borderline Personality Disorder</a></p>
      </div>
      <div class="bg4">
      <p>      <a class = "aw" href="articles/article4" taret="_self">Depression</a></p>
      </div>
      <div class="bg5">
      <p>      <a class = "ag" href="articles/article5" taret="_self">Eating Disorder</a></p>
      </div>
      <div class="bg6">
      <p>      <a class = "aw" href="articles/article6" taret="_self">Grief</a></p>
      </div>
      <div class="bg7">
      <p>      <a class = "ab" href="articles/article7" taret="_self">Stress</a></p>
      </div>
      <div class="bg8">
      <p>      <a class = "ab" href="articles/article8" taret="_self">Self-Esteem</a></p>
      </div>
      <div class="bg9">
      <p>      <a class = "ag" href="articles/article9" taret="_self">Relationship</a></p>
      </div>
      <div class="bg10">
      <p>      <a class = "aw" href="articles/article10" taret="_self">Mental Health</a></p>
      </div>
      <div class="bg11">
      <p>      <a class = "ag" href="articles/article11" taret="_self">Autism </a></p>
      </div>
      <div class="bg12">
      <p>      <a class = "aw" href="articles/article12" taret="_self">Schizophernia</a></p>

      </div>
    </div>
    
     

</body>
@endsection
</html>

