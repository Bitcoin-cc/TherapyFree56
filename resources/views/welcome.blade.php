@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>therapy</title>
    </head>
    <body class="antialiased">
    <!DOCTYPE html>
<html>
<head>




</head>
<body>
<h2 class="wide">Welcome to BitTherapy!</h2>
<section class="home_banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6 col-xl-5 offset-xl-7">
                        <div class="banner_content">
                            <h3>BitTherapy</h3>
                            <p>Our website provides high quality therapy service directly to you via our services we can provide</p>
                            <a class="banner_btn" href="services">Services<i class="ti-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Service  Area =================-->
<section id="core_features" class="service-area area-padding">
    <div class="container">
        <div class="row">
             <!-- Single service -->
            <div class="col-md-6 col-lg-4">
                <div class="single-service">
                    <div class="service-icon">
                        <i class="ti-pencil-alt"></i>
                    </div>
                    <div class="service-content">
                        <h5>Connect with a Doctor!</h5>
                        <p>Our website includes top level Doctors in the field of Psychology to aid your issues and pleads for any mental issues you are facing!</p>
                        <a href="services">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Single service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="ti-image"></i>
                        </div>
                        <div class="service-content">
                            <h5>Questionnaire</h5>
                            <p>Take our Questionnaire to find out yourself what may be hindering you in your life!</p>
                            <a href="Questionnaire">Take it now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
    </body>
</html>
@endsection
