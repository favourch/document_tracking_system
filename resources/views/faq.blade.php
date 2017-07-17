@extends('layout.main')

@section('content')

<body id="home-three">	
		<div id="page-title" class="image-bg">
			<div class="container text-center">
				<div class="title-content">
					<h1>FAQ</h1>
					<p>Frequently Asked Questions</p>
				</div>
			</div>
		</div><!--/#page title-->
		
		<div id="faq-section" class="padding">
			<div class="container">
				<div class="row text-center section-title">
					<h1>Frankly Asked Questions</h1>
					<h2>How Does Kogi State Document Tracking System work?</h2>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="faq-image">
							<?php /*?><img class="img-responsive" src="{{URL::asset('default-images/services/faq.jpg')}}" alt=""><?php */?>
						</div>
					</div>
					<div class="col-sm-12 col-md-12">
						<div class="faqs">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading active" role="tab">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="fa fa-minus-circle"></span> Question One</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body">
											<p>Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab">
										<h4 class="panel-title">
											<a class="accordion-toggle" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="fa fa-plus-circle"></span> Question Two</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab">
										<h4 class="panel-title">
											<a class="accordion-toggle" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="fa fa-plus-circle"></span> Question Three</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse">
										<div class="panel-body">
											<p> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab">
										<h4 class="panel-title">
											<a class="accordion-toggle" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="fa fa-plus-circle"></span> Quetion Four</a>
										</h4>
									</div>
									<div id="collapseFour" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/#faq-section-->

@stop




