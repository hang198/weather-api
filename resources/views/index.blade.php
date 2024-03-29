<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Compass Starter by Ariona, Rian</title>

    <!-- Loading third party fonts -->
    <link href={{asset("http://fonts.googleapis.com/css?family=Roboto:300,400,700|")}} rel="stylesheet" type="text/css">
    <link href="{{asset('fonts/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="{{asset('style.css')}}">

</head>


<body>

<div class="site-content">
    <div class="site-header">
        <div class="container">
            <a href="index.html" class="branding">
                <img src="images/logo.png" alt="" class="logo">
                <div class="logo-type">
                    <h1 class="site-title">Weather</h1>
                    <small class="site-description">City weather</small>
                </div>
            </a>

            <!-- Default snippet for navigation -->
            <div class="main-navigation">
                <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                <ul class="menu">
                    <li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
                </ul> <!-- .menu -->
            </div> <!-- .main-navigation -->

            <div class="mobile-navigation"></div>

        </div>
    </div> <!-- .site-header -->

    <div class="hero" data-bg-image="images/banner.png">
        <div class="container">
            <form action="#" class="find-location">
                <input type="text" placeholder="Find your location...">
                <input type="submit" value="Find">
            </form>

        </div>
    </div>
    <div class="forecast-table">
        <div class="container">
            <div class="forecast-container">
                <div class="today forecast">
                    <div class="forecast-header">
                        <div class="day">{{date("l")}}</div>
                        <div class="date">{{date("d")}}</div>
                    </div> <!-- .forecast-header -->
                    <div class="forecast-content">
                        <div class="location">{{$weather->name}}</div>
                        <div class="degree">
                            <div class="num">{{$weather->main->temp- 273.15}}<sup>o</sup>C</div>
                            <div class="forecast-icon">
                                <img src="images/icons/icon-1.svg" alt="" width=90>
                            </div>
                        </div>
                        <span><img src="images/icon-umberella.png" alt="">20%</span>
                        <span><img src="images/icon-wind.png" alt="">{{$weather->wind->speed}}</span>
                        <span><img src="images/icon-compass.png" alt="">{{ $weather->weather[0]->description }}</span>
                    </div>
                </div>
                <div class="forecast">
                    <div class="forecast-header">
                        <div class="day">Tuesday</div>
                    </div> <!-- .forecast-header -->
                    <div class="forecast-content">
                        <div class="forecast-icon">
                            <img src="images/icons/icon-3.svg" alt="" width=48>
                        </div>
                        <div class="degree">23<sup>o</sup>C</div>
                        <small>18<sup>o</sup></small>
                    </div>
                </div>
                <div class="forecast">
                    <div class="forecast-header">
                        <div class="day">Wednesday</div>
                    </div> <!-- .forecast-header -->
                    <div class="forecast-content">
                        <div class="forecast-icon">
                            <img src="images/icons/icon-5.svg" alt="" width=48>
                        </div>
                        <div class="degree">23<sup>o</sup>C</div>
                        <small>18<sup>o</sup></small>
                    </div>
                </div>
                <div class="forecast">
                    <div class="forecast-header">
                        <div class="day">Thursday</div>
                    </div> <!-- .forecast-header -->
                    <div class="forecast-content">
                        <div class="forecast-icon">
                            <img src="images/icons/icon-7.svg" alt="" width=48>
                        </div>
                        <div class="degree">23<sup>o</sup>C</div>
                        <small>18<sup>o</sup></small>
                    </div>
                </div>
                <div class="forecast">
                    <div class="forecast-header">
                        <div class="day">Friday</div>
                    </div> <!-- .forecast-header -->
                    <div class="forecast-content">
                        <div class="forecast-icon">
                            <img src="images/icons/icon-12.svg" alt="" width=48>
                        </div>
                        <div class="degree">23<sup>o</sup>C</div>
                        <small>18<sup>o</sup></small>
                    </div>
                </div>
                <div class="forecast">
                    <div class="forecast-header">
                        <div class="day">Saturday</div>
                    </div> <!-- .forecast-header -->
                    <div class="forecast-content">
                        <div class="forecast-icon">
                            <img src="images/icons/icon-13.svg" alt="" width=48>
                        </div>
                        <div class="degree">23<sup>o</sup>C</div>
                        <small>18<sup>o</sup></small>
                    </div>
                </div>
                <div class="forecast">
                    <div class="forecast-header">
                        <div class="day">Sunday</div>
                    </div> <!-- .forecast-header -->
                    <div class="forecast-content">
                        <div class="forecast-icon">
                            <img src="images/icons/icon-14.svg" alt="" width=48>
                        </div>
                        <div class="degree">23<sup>o</sup>C</div>
                        <small>18<sup>o</sup></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
