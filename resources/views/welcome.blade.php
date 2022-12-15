<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SUWASTE</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('user/css/bootstrap.css') }}" rel="stylesheet" />
        <link href="{{ asset('user/css/landing-page.css') }}" rel="stylesheet"/>
        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
        <link href="{{ asset('user/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

         <body class="landing-page landing-page1">
           
            <nav class="navbar navbar-transparent navbar-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                        </button>
                                    
                       
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="example" >
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#">
                                About Us
                                </a>
                            </li>    
                            <li>
            
                             @if (Route::has('login'))
                             
                            @auth
                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif
                            @endauth
               
                <li>
                </ul>
            @endif
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
                <div class="wrapper">
                    <div class="parallax filter-gradient orange" data-color="orange">
                        <div class="parallax-background">
                            <!--<img class="parallax-background-image" src="{{ asset('user/img/showcases/showcase-1/bg.png') }}">-->
                        </div>
                        <div class= "container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="description">
                                        <h2>Recycling - the first step is sorting the waste</h2>
                                        <br>
                                        <h5>Throwing trash has never been made this easy. And yes..you get paid to do it! Sort your trash by using our API and earn points!!</h5>
                                    </div>
                                    <div class="buttons">
                                        <button class="btn btn-fill btn-neutral">
                                        <i class="fa fa-recycle"></i> Reduce, Reuse,Recycle
                                        </button>
        
                                    </div>
                                </div>
                                <div class="col-md-5  hidden-xs">
                                    <div class="parallax-image">
                                        <img class="phone" src="{{ asset('user/img/showcases/showcase-1/iphone.png' )}}"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section section-gray section-clients">
                        <div class="container text-center">
                            <h4 class="header-text">Be the first to try us out</h4>
                            <p>
                                Its easy. Use your student credentials to create an account. The firts time users get 50 points for free. Gain more points by scanning and properly dispoing recyclables<br>
                                </p>
                        </div>
                    </div>
               
                <div class="section section-demo parallax filter-gradient orange">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="description-carousel" class="carousel fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item">
                                            <img src="{{ asset('user/img/showcases/showcase-1/test1.png') }}" alt="">
                                        </div>
                                        <div class="item active">
                                            <img src="{{ asset('user/img/showcases/showcase-1/test2.png') }}" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="{{ asset('user/img/showcases/showcase-1/test4.png') }}" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="{{ asset('user/img/showcases/showcase-1/test3.png') }}" alt="">
                                        </div>
                                    </div>
                                    <ol class="carousel-indicators carousel-indicators-orange">
                                        <li data-target="#description-carousel" data-slide-to="0" class=""></li>
                                        <li data-target="#description-carousel" data-slide-to="1" class="active"></li>
                                        <li data-target="#description-carousel" data-slide-to="2" class=""></li>
                                        <li data-target="#description-carousel" data-slide-to="3" class=""></li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <h4 class="header-text">FREE OBJECT DETECTION</h4>
                                <p>
                                   Try out our Object Detection Yolov5 model using Roboflow from any of your devices with a web camera.
                                </p>
                                <a href="https://demo.roboflow.com/recyclable-trash-detection/2?publishable_key=rf_x0fmutrEiZPZryliZNiglCI3OLM2" id="Demo1" class="btn btn-warning btn-fill" data-button="warning">Demo</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="section section-testimonial">
                    <div class="container">
                        <h4 class="header-text text-center">What people think</h4>
                        <div id="carousel-example-generic" class="carousel fade" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item">
                                    <div class="mask">
                                        <img src="{{ asset('user/img/faces/face-4.jpg') }}">
                                    </div>
                                    <div class="carousel-testimonial-caption">
                                        <p>Tevin, Classmate</p>
                                        <h3>"I think its an innovative idea that cann= gain traction in some public an dprivate universities"</h3>
                                    </div>
                                </div>
                                <div class="item active">
                                    <div class="mask">
                                        <img src="{{ asset('user//img/faces/face-3.jpg') }}">
                                    </div>
                                    <div class="carousel-testimonial-caption">
                                        <p>Doji, Lawyer</p>
                                        <h3>"Really cool cocept, Love it!!"</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="mask">
                                        <img src="{{ asset('user/img/faces/face-2.jpg') }}">
                                    </div>
                                    <div class="carousel-testimonial-caption">
                                        <p>Leon, Game Developer</p>
                                        <h3>"This took a lot of hard work. Good job."</h3>
                                    </div>
                                </div>
                            </div>
                            <ol class="carousel-indicators carousel-indicators-orange">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                        </div>
                    </div>
                </div>
               
                <footer class="footer">
                    <div class="container">
                        <nav class="pull-left">
                            
                        </nav>
                        
                        <div class="copyright">
                            &copy; 2016 <a href="http://www.creative-tim.com">Creative Tim</a>, made with love
                        </div>
                    </div>
                </footer>
            </div>
            
        </body>
    
    <script src="{{ asset('user/js/jquery-1.10.2.js') }}" ></script>
    <script src="{{ asset('user/js/jquery-ui-1.10.4.custom.min.js' )}}" ></script>
    <script src="{{ asset('user/js/bootstrap.js') }}" ></script>
    <script src="{{ asset('user/js/awesome-landing-page.js' )}}"></script>
</html>
