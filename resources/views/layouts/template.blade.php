<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>UIT FW</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">


    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


    <!-- Stylesheets -->

    <link href="{{ URL::asset('common-css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{URL::asset('common-css/ionicons.css')}}" rel="stylesheet">


    <link href="{{URL::asset('layout-1/css/styles.css')}}" rel="stylesheet">

    <link href="{{URL::asset('layout-1/css/responsive.css')}}" rel="stylesheet">
    
</head>

<body >

    <header>
        <div class="container-fluid position-relative no-side-padding">

            <a href="{{url('')}}" class="logo"><b>UIT Fresher Welcome</b></a>

            <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

            <ul class="main-menu visible-on-click" id="main-menu">
                <li><a href="{{url('KingsQueens')}}">Vote For Kings & Queens</a></li>
                <li><a href="{{url('food')}}">Food Courts</a></li>
                <li><a href="{{url('unimap')}}">Campus Map</a></li>
                <li><a href="{{url('FWagenda')}}">Agenda</a></li>
                <li><a href="{{url('logout')}}">Log Out</a></li>
                    
            </ul><!-- main-menu -->
        <!-- conatiner -->
    </header>

@yield('content')

    <footer>

        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-section">

                        <a class="logo" href="#"><h5><b>University of Information Technology</b></h5></a>
                        
                        #ThisIsHowWeUIT
                        <br>
                        
                        <p class="copyright">Designed by UIT 5th Batch</p>
                        <ul class="icons">
                            <li><a href="https://www.facebook.com/FwOrgTeam/"><i class="ion-social-facebook-outline"></i></a></li>
                        </ul>
                        <br>
                        <p class="copyright" align="center">UIT @ 2018 Fresher Welcome. All rights reserved.</p>

                    </div><!-- footer-section -->
                </div><!-- col-lg-4 col-md-6 -->

                

                

            </div><!-- row -->
        </div><!-- container -->
    </footer>


    <!-- SCIPTS -->

    <script src="{{URL::asset('common-js/jquery-3.1.1.min.js')}}"></script>

    <script src="{{URL::asset('common-js/tether.min.js')}}"></script>

    <script src="{{URL::asset('common-js/bootstrap.js')}}"></script>

    <script src="{{URL::asset('common-js/scripts.js')}}"></script>

</body>
</html>
