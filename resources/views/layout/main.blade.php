<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<!--title-->
    <title>Kogi State File Document System</title>
	
	<!--CSS-->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/twentytwenty.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/tr-animation.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/blue.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/responsive.css')}}" rel="stylesheet">
	
	<!--Google Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,700,700italic,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,900' rel='stylesheet' type='text/css'>
	
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{URL::asset('http://themeregion.com/demo/arki/default-images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::asset('}default-images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::asset('default-images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::asset('default-images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::asset('default-images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->
<body>
    
    	
         
         @yield('content') 
    
   <footer id="footer">			
			<div class="container">
				<a href="{{URL::route('faq')}}">FAQ</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                <a href="{{URL::route('faq')}}">Documentations</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                <a href="{{URL::route('faq')}}">How it Works</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                <a href="{{URL::route('contact-us')}}">Contact Us</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
			</div>
			<div id="footer-bottom">
				<div class="container text-center">
					<p>© Copyright 2017. All Rights Reserved. Developed by: <a href="#">Confluence Hub</a></p>
				</div>			
			</div>
		</footer>
	</div>
	
	<!--/#scripts--> 
    <script type="text/javascript" src="{{URL::asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('http://maps.google.com/maps/api/js?sensor=true')}}"></script>
  	<script type="text/javascript" src="{{URL::asset('js/gmaps.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.parallax.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.nav.js')}}"></script> 
	<script type="text/javascript" src="{{URL::asset('js/jquery.typer.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.event.move.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/jquery.twentytwenty.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/jquery.countTo.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/jquery.inview.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/isotope.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>	
	
</body>
</html>