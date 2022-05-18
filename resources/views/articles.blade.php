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


.container {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 10px;
}



.container > div {
    cursor: pointer;
  height: 210px;
  background-size: cover;
  display: flex;
  flex-direction: column;

  align-items: center;
  justify-content: center;
  text-align: center;

}

.container > div:hover {
    transform: scale(0.88);
    opacity: 0.7;
    

}



.bg1 {
  background: url('/laravelad/resources/views/images/signs-of-anxiety-disorder-2.jpg');
}

.bg2 {
    background: url('/laravelad/resources/views/images/frustrated_man.jpg');
  
}

.bg3 {
  background: url('/laravelad/resources/views/images/Borderline-Personality.jpg');
  color: black;

}

.bg4 {
  background: url('/laravelad/resources/views/images/depression.jpg');
}

.bg5 {
  background: url('/laravelad/resources/views/images/fat.jpg');
  color: #333;

}

.bg6 {
  background: url('/laravelad/resources/views/images/grieff.webp');
}


.bg7 {
  background: url('/laravelad/resources/views/images/stress.jpg');
  color: black;

}

.bg8 {
  background: url('/laravelad/resources/views/images/selfteem.jpg');
  color: black;

}

.bg9 {
  background: url('/laravelad/resources/views/images/relation.jpg');
  color: #333;

}

.bg10 {
  background: url('/laravelad/resources/views/images/mentalhe.jpg');

}

.bg11 {
  background: url('/laravelad/resources/views/images/autsi.jpg');
  color: #333;

}


.bg12 {
  background: url('/laravelad/resources/views/images/insomnia.jpg');
}

</style>

<body>

<div class="container">
      <div class="bg1">
        <p>Anxiety</p>
      </div>

      <div class="bg2">
        <p>Anger</p>
      </div>
      <div class="bg3">
        <p>Borderline Personality Disorder</p>
      </div>
      <div class="bg4">
        <p>Depression</p>
      </div>
      <div class="bg5">
        <p>Eating Disorder</p>
      </div>
      <div class="bg6">
        <p>Grief</p>
      </div>
      <div class="bg7">
        <p>Stress</p>
      </div>
      <div class="bg8">
        <p>Self-Esteem</p>
      </div>
      <div class="bg9">
        <p>Relationship</p>
      </div>
      <div class="bg10">
        <p>Mental Health</p>
      </div>
      <div class="bg11">
        <p>Autism</p>
      </div>
      <div class="bg12">
        <p>Schizophernia</p>
      </div>
    </div>


</body>
</html>