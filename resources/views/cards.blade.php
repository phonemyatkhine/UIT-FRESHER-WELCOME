<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Selections</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


	<!-- Stylesheets -->

	<link href="{{URL::asset('ahnkingqueen/common-css/bootstrap.css')}}" rel="stylesheet">

	<link href="{{URL::asset('ahnkingqueen/common-css/ionicons.css')}}" rel="stylesheet">


	<link href="{{URL::asset('ahnkingqueen/king_queen/css/styles.css')}}" rel="stylesheet">

	<link href="{{URL::asset('ahnkingqueen/king_queen/css/responsive.css')}}" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{URL::asset('ahnkingqueen/fontawesome-free-5.6.1-web/css/all.css')}}">

</head>
<body >

	<header style="position: fixed; z-index: 11; width: 100%">
        <div class="container-fluid position-relative no-side-padding">

            <a href="#" class="logo"><b>UIT Fresher Welcome</b></a>

            <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

            <ul class="main-menu visible-on-click" id="main-menu">
                <li><a href="{{url('KingsQueens')}}">Vote For Kings & Queens</a></li>
                <li><a href="{{url('foodCourts')}}">Food Courts</a></li>
                <li><a href="{{url('map')}}">Campus Map</a></li>
                <li><a href="{{url('agenda')}}">Agenda</a></li>

                
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
	<script type="text/javascript">
		function vote(name){
		 if(confirm('Do you want to vote for'+name+'?')){
		        document.getElementById('delete-form').submit();
		    }else{
		        return false;
		    }   

		}
	</script>
	<script src="{{URL::asset('ahnkingqueen/common-js/jquery-3.1.1.min.js')}}"></script>

	<script src="{{URL::asset('ahnkingqueen/common-js/tether.min.js')}}"></script>

	<script src="{{URL::asset('ahnkingqueen/common-js/bootstrap.js')}}"></script>

	<script src="{{URL::asset('ahnkingqueen/common-js/scripts.js')}}"></script>

</body>
</html>