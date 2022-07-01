 @extends('layouts.app')

@section('content')

{{-- 

<div class="container">
    <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="q"
                placeholder="Search users"> <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </form>
    <div class="container">
        @if(isset($details))
        <h2> The Search results for <b> {{ $query }} </b> are :</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($details as $patinets)
                <tr>
                    <td>{{$patient->name}}</td>
                    <td>{{$patient->Description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @elseif(isset($message))
        <p>{{ $message }}</p>
        @endif
    </div> --}}
{{-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                             <h1>Home</h1>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('flash_message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('flash_message') }}
                    </div>
                @endif
                   
                    <a href="request/" taret="_self">Show Doctor Comments  </a>
            
                    {{ __('You are logged in!') }}
                   click here If you have Admin Access <a href="/admin/home" target="_self">Admin Panel</a>
                   <a href="articles" taret="_self">Articles</a>
                   <a href="Service&Policy" taret="_self">Services&Policy</a>
                   <a href="Questionnaire" taret="_self">Questionnaire</a>
                   <a href="services" taret="_self">services</a>
                   <a href="faq" taret="_self">faq</a>
                   <a href="dashboard" taret="_self">dashboard</a>
                   <a href="aboutus" taret="_self">About Us</a>
                   <a href="connectWdoc" taret="_self">Connect With a Doctor</a>
            
                </div>
               
            </div>
        </div>
    </div>
</div> --}}


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/style.css">


    <title>BitTherapy</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" >
   <style>
   
/* The hero image */
.hero {

  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/pp.jpg");

  background-size: cover;
    background-repeat: no-repeat;

 
}

/* Place text in the middle of the image */

    </style>
  
    <div class="hero vh-100 d-flex align-items-center bg-secondary " id="home">
        <div class="container">
            <div class="hero-image">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
               
                    <h1 class="display-4 text-white">BitTherapy Homepage</h1>
                    <p class="text-white my-3">Facing Difficulties In life ? Don't Worry We Can Help!</p>
                </div>
                </div>
            </div>
        </div>
    </div><!-- //HERO -->

    <!-- SERVICES -->
    <section id="services">
        <div class="container">
           
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">SERIVCES</h6>
                    <h1>Our Services</h1>
                    <p> We Provide Mental Illnesses Therapy And Questionnaire To Know Our Clients Needs And Give Them Help 
                    Accordingly
                    </p>
                </div>
            </div>
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
                
                
                .oocontainer {
                  display: grid;
                  grid-template-columns: repeat(2, 2fr);
                  grid-gap: 25px;
                }
                
                
                
                .oocontainer > div {
                    cursor: pointer;
                  height: 560px;
            
                  background-size: cover;
                  display: flex;
                  flex-direction: column;
                
                  align-items: center;
                  justify-content: center;
                  text-align: center;
                
                }
                
                .oocontainer > div:hover {
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
                  background: url('images/docpic.jpg');
                }
                
                .que {
                    background: url('images/questio.jpg');
                  
                }
                
                
                
                
                
                </style>
                
                <body>
                  
                <div class="oocontainer">
                      <div class="doc">
                        <p><a style ="color=black;" class = "condoc" href="connectWdoc" taret="_self">Connect With a Doctor</a>         </p>
                      </div>
                      <div class="que">
                        <p>      <a style ="color=black;" class = "quest" href="Questionnaire" taret="_self">Take a Questionnaire</a></p>
                      </div>
                      
                
                    </div>
                
                    </div>
                
                </div>

        </div>
    </section><!-- SERVICES -->



    <!-- PRICING -->
    <section class="bg-white" id="pricing" >
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">PRICING</h6>
                    <h1>Our Pricing</h1>
                    <p>Make Payment To The Doctor For The Needed Subscription</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing card-effect text-center">
                        <h6>90 Days Subscription</h6>
                        <h1>$99</h1>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li><i class='bx bxs-check-circle'></i>
                                Doctor Diagnosis </li>
                            <li><i class='bx bxs-check-circle'></i>
                                Life Advice  </li>
                            <li><i class='bx bxs-check-circle'></i>
                              Follow up Sessions  </li>
                            <li><i class='bx bxs-check-circle'></i>
                                 </li>
                        </ul>


                        <a  href="payment1"class="btn btn-primary">Make Payment</a>



                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing card-effect text-center">
                        <h6>180 Days Subscription</h6>
                        <h1>$199</h1>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li><i class='bx bxs-check-circle'></i>
                                Doctor Diagnosis </li>
                            <li><i class='bx bxs-check-circle'></i>
                                Life Advice  </li>
                            <li><i class='bx bxs-check-circle'></i>
                              Follow up Sessions  </li>
                            <li><i class='bx bxs-check-circle'></i>
                                 </li>
                        </ul>
                        <a  href="payment2"class="btn btn-primary">Make Payment</a>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing card-effect text-center">
                        <h6>One Year Subscription</h6>
                        <h1>$299</h1>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li><i class='bx bxs-check-circle'></i>
                                Doctor Diagnosis </li>
                            <li><i class='bx bxs-check-circle'></i>
                                Life Advice  </li>
                            <li><i class='bx bxs-check-circle'></i>
                              Follow up Sessions  </li>
                            <li><i class='bx bxs-check-circle'></i>
                                 </li>
                        </ul>
                        <a  href="payment3"class="btn btn-primary">Make Payment</a>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing card-effect text-center">
                        <h6>Life-Long Subscription</h6>
                        <h1>$399</h1>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li><i class='bx bxs-check-circle'></i>
                                Doctor Diagnosis </li>
                            <li><i class='bx bxs-check-circle'></i>
                                Life Advice  </li>
                            <li><i class='bx bxs-check-circle'></i>
                              Follow up Sessions  </li>
                            <li><i class='bx bxs-check-circle'></i>
                                 </li>
                           
                        </ul>
                        <a  href="payment4"class="btn btn-primary">Make Payment</a>

                    </div>
                </div>
            </div>
        </div>
    </section><!-- PRICING -->

    <!-- TEAM -->
    <section id="team">
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
      
    </section><!-- TEAM -->

    
    <section id="blog" class="bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="text-center">
                    <h6 class="text-primary">Website Articles</h6>
                    <style>
                        * {
                          box-sizing: border-box;
                          margin: 0;
                          padding: 0;
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
                          background: url('images/signs-of-anxiety-disorder-2.jpg');
                        }
                        
                        .bg2 {
                            background: url('images/frustrated_man.jpg');
                          
                        }
                        
                        .bg3 {
                          background: url('images/Borderline-Personality.jpg');
                          color: black;
                        
                        }
                        
                        .bg4 {
                          background: url('images/depression.jpg');
                        }
                        
                        .bg5 {
                          background: url('images/fat.jpg');
                          color: #333;
                        
                        }
                        
                        .bg6 {
                          background: url('images/grieff.webp');
                        }
                        
                        
                        .bg7 {
                          background: url('images/stress.jpg');
                          color: black;
                        
                        }
                        
                        .bg8 {
                          background: url('images/selfteem.jpg');
                          color: black;
                        
                        }
                        
                        .bg9 {
                          background: url('images/relation.jpg');
                          color: #333;
                        
                        }
                        
                        .bg10 {
                          background: url('images/mentalhe.jpg');
                        
                        }
                        
                        .bg11 {
                          background: url('images/autsi.jpg');
                          color: #333;
                        
                        }
                        
                        
                        .bg12 {
                          background: url('images/insomnia.jpg');
                        }
                        
                        </style>
                        <body>
                          <div class="cocontainer ">
                        
                              <div class="bg1">
                              <p>      <a class = "aw" href="/articles/article1" taret="_self">Anxiety</a></p>
                              </div>
                        
                              <div class="bg2">
                              <p>      <a class = "aw" href="/articles/article2" taret="_self">Anger</a></p>
                              </div>
                              <div class="bg3">
                              <p>      <a class = "ab" href="/articles/article3" taret="_self">Borderline Personality Disorder</a></p>
                              </div>
                              <div class="bg4">
                              <p>      <a class = "aw" href="/articles/article4" taret="_self">Depression</a></p>
                              </div>
                              <div class="bg5">
                              <p>      <a class = "ag" href="/articles/article5" taret="_self">Eating Disorder</a></p>
                              </div>
                              <div class="bg6">
                              <p>      <a class = "aw" href="/articles/article6" taret="_self">Grief</a></p>
                              </div>
                              <div class="bg7">
                              <p>      <a class = "ab" href="/articles/article7" taret="_self">Stress</a></p>
                              </div>
                              <div class="bg8">
                              <p>      <a class = "ab" href="/articles/article8" taret="_self">Self-Esteem</a></p>
                              </div>
                              <div class="bg9">
                              <p>      <a class = "ag" href="/articles/article9" taret="_self">Relationship</a></p>
                              </div>
                              <div class="bg10">
                              <p>      <a class = "aw" href="/articles/article10" taret="_self">Mental Health</a></p>
                              </div>
                              <div class="bg11">
                              <p>      <a class = "ag" href="articles/article11" taret="_self">Autism </a></p>
                              </div>
                              <div class="bg12">
                              <p>      <a class = "aw" href="/articles/article12" taret="_self">Schizophernia</a></p>
                        
                              </div>
                            </div>
                            
                             
                        
    </section><!-- BLOG -->

   

</body>
</html>
@endsection







