<!DOCTYPE html>
<html>
	
<!-- Mirrored from native-theme.com/pongo/table.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2017 12:32:49 GMT -->
<head>
		<title>Adminstrator</title>
		<meta charset="utf-8">
		<meta content="ie=edge" http-equiv="x-ua-compatible">
		<meta content="template language" name="keywords">
		<meta content="Native Theme" name="author">
		<meta content="Document Tracking System" name="description">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<link href="{{URL::asset('user1/favicon.png')}}" rel="shortcut icon">
		<link href="{{URL::asset('user1/apple-touch-icon.png')}}" rel="apple-touch-icon">
		<link rel="stylesheet" href="{{URL::asset('user1/plugins/bootstrap/dist/css/bootstrap.min.css')}}"/>
		<link rel="stylesheet" href="{{URL::asset('user1/plugins/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{URL::asset('user1/plugins/animate/animate.css')}}">
		<link rel="stylesheet" href="{{URL::asset('user1/css/main.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('user1/css/modal.css')}}"/>

		<script src="{{URL::asset('user1/plugins/jquery/jquery-2.1.1.min.js')}}"></script>
		<script src="{{URL::asset('user1/plugins/jquery-count-to/jquery.countTo.js')}}"></script>
		<script src="{{URL::asset('user1/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		<script src="{{URL::asset('user1/js/app.js')}}"></script>
        
	</head>
	<body>
         @yield('content') 
    	<script src="{{URL::asset('user1/js/modal.js')}}"></script>
  </body>

</html>