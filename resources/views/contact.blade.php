@extends('layout.main')

@section('content')

<div id="page">
		
		
		
		<div id="page-title" class="image-bg">
			<div class="container text-center">
				<div class="title-content">
					<h1>Contact Us</h1>
					<p>Having any issues in using the system? drop a note and we'll get back to you ASAP</p>
				</div>
			</div>
		</div><!--/#page title-->
			
		<div id="contact-us">
			
			
			
		<!--	<div id="gmap"></div><!--/#gmap-->
			
			
			<div class="contact-wrap padding"> 
				<div class="container">	
					<div class="section-title text-center">
						<h1>Any Question / Request </h1>
						<h2>Drop Your Message</h2>
						
					</div>
					<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="http://demo.themeregion.com/arki/Arki-blue/scripts/sendmail.php">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" name="name" class="form-control" required placeholder="Name">
								</div>
								<div class="form-group">
									<input type="email" name="email" class="form-control" required placeholder="Email">
								</div>
								<div class="form-group">
									<input type="text" name="subject" class="form-control" required placeholder="Subject">
								</div>	
							</div>
							<div class="col-sm-6">
								 <div class="form-group">
									<textarea name="msg" id="message" required class="form-control" rows="9" placeholder="Message"></textarea>
								</div> 
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-animated">Send Your Message</button>
								</div>							
							</div>					
						</div>
					</form>
				</div>
			</div>
		</div><!--/#login-wrapper-->
                
@stop




