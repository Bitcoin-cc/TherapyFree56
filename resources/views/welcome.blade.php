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



</head>
<body>
<div class="topnav">
<<<<<<< HEAD
	<a class="title" href="laravelAD/public/" taret="_self">Bit Therapy </a>
=======
	<a class="title" href="laravelAD/public/" taret="_self">The Therapy Webbo</a>
>>>>>>> 68c1b536006d0ad0d30f6027c70b46833fe8e80a
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> <!-- edit this to change where the code lands after loging in -->
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
            <a href="articles" taret="_self">Articles</a>
<<<<<<< HEAD
            <a href="Questionnaire" taret="_self">Questionnaire</a>
=======
>>>>>>> 68c1b536006d0ad0d30f6027c70b46833fe8e80a

</div>
<h2 class="wide">Therapy main page</h2>
display stuff that are beautiful and related to our website (mental health issues)
<div class="footer">
<<<<<<< HEAD
<a href="Service&Policy" target="_self">Service & Policy</a>
<a href="aboutus" target="_self">About Us</a>
<a href="faqs" target="_self">FAQ </a>
=======
<a href="services" target="_self">Services</a>
<a href="aboutus" target="_self">About Us</a>
>>>>>>> 68c1b536006d0ad0d30f6027c70b46833fe8e80a
</div>
</body>
</html>


    </body>
</html>
