@extends('user1.layout.main')

@section('content')
		<div class="top-nav">
			<div class="top-nav-box">
				<div class="side-nav-mobile"><i class="fa fa-bars"></i></div>
				<div class="logo-wrapper">
					<div class="logo-box">
						<img alt="pongo" src="{{URL::asset('user1/images/logo.png')}}">
						<a href="#">
							<div class="logo-title">Adminstrator</div>
						</a>
					</div>
				</div>
				<div class="top-nav-content">
					<div class="top-nav-box">
						<div class="global-search">
							<form class="form-inline">
								<button class="btn btn-primary" type="submit"> <i class="fa fa-search"></i></button>
								<input class="form-control mb-1 mr-sm-1 mb-sm-0" placeholder="Search Documents..." type="text">
							</form>
						</div>
						<div class="top-notification">
							<div class="notification-icon">
								<i class="fa fa-envelope-open"></i>
							</div>
							
							<div class="notification-icon">
								<div class="notification-badge bounceInDown animated timer" data-from="0" data-to="3">3</div>
								<i class="fa fa-bell"></i>
								<div class="notification-wrapper animated bounceInUp">
									<div class="notification-header">Notifications <span class="notification-count">3</span></div>
									<div class="notification-body">
										<a class="notification-list" href="#">
											<div class="notification-image">
												<img alt="pongo" src="{{URL::asset('user1/images/asparagus.jpg')}}">
											</div>
											<div class="notification-content">
												<div class="notification-text"><strong>Mark</strong> sent you a email</div>
												<div class="notification-time">1 minutes ago</div>
											</div>
										</a>
										<a class="notification-list" href="#">
											<div class="notification-image">
												<img alt="pongo" src="{{URL::asset('user1/images/chocolate.jpg')}}">
											</div>
											<div class="notification-content">
												<div class="notification-text"><strong>Lisa</strong> sent you a email</div>
												<div class="notification-time">1 minutes ago</div>
											</div>
										</a>
										<a class="notification-list" href="#">
											<div class="notification-image">
												<img alt="pongo" src="{{URL::asset('user1/images/belts.jpg')}}">
											</div>
											<div class="notification-content">
												<div class="notification-text"><strong>Parker</strong> sent you a email</div>
												<div class="notification-time">1 minutes ago</div>
											</div>
										</a>
										<a class="notification-list" href="#">
											<div class="notification-image">
												<img alt="pongo" src="{{URL::asset('user1/images/asparagus.jpg')}}">
											</div>
											<div class="notification-content">
												<div class="notification-text"><strong>Sophie</strong> sent you a email</div>
												<div class="notification-time">1 minutes ago</div>
											</div>
										</a>
										<a class="notification-list" href="#">
											<div class="notification-image">
												<img alt="pongo" src="{{URL::asset('user1/images/asparagus.jpg')}}">
											</div>
											<div class="notification-content">
												<div class="notification-text"><strong>Sophie</strong> sent you a email</div>
												<div class="notification-time">1 minutes ago</div>
											</div>
										</a>
										<a class="notification-list" href="#">
											<div class="notification-image">
												<img alt="pongo" src="{{URL::asset('user1/images/asparagus.jpg')}}">
											</div>
											<div class="notification-content">
												<div class="notification-text"><strong>Sophie</strong> sent you a email</div>
												<div class="notification-time">1 minutes ago</div>
											</div>
										</a>
									</div>
									<div class="notification-footer">
										<a href="#">See all notifications</a>
									</div>
								</div>
							</div>
						</div>
						<div class="user-top-profile">
							<div class="user-image">
								<div class="user-on"></div>
								<img alt="pongo" src="{{URL::asset('user1/images/profile.png')}}">
							</div>
							<div class="clear">
								<div class="user-name">John Doe</div>
								<div class="user-group">Administrator</div>
								<ul class="user-top-menu animated bounceInUp">
									<li><a href="#">Profile <div class="badge badge-yellow pull-right">2</div></a></li>
									<li><a href="#">Settings</a></li>
									<li><a href="#">Change Password</a></li>
									<li><a href="{{URL::route('logout')}}">Logout</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="profile-nav-mobile"><i class="fa fa-cog"></i></div>
			</div>
		</div>
		<div class="wrapper">
			<aside class="side-nav">
				<div class="user-side-profile">
					<div class="user-image">
						<div class="user-on"></div>
						<img alt="pongo" src="{{URL::asset('user1/images/profile.png')}}">
					</div>
					<div class="clear">
						<div class="user-name">John Doe</div>
						<div class="user-group">Administrator</div>
						<ul class="user-side-menu animated bounceInUp">
							<li><a href="#">Profile <div class="badge badge-yellow pull-right">2</div></a></li>
							<li><a href="#">Settings</a></li>
							<li><a href="#">Change Password</a></li>
							<li><a href="{{URL::route('logout')}}">Logout</a></li>
						</ul>
					</div>
				</div>
				<div class="main-menu-title">Menu</div>
				<div class="main-menu">
					<ul>
						<li>
							<a href="#">
								<i class="fa fa-bars"></i> 
								<span>Navigation 1</span>
							</a>
						</li>

						<li>
							<a href="#">
								<i class="fa fa-random"></i> 
								<span>Navigation 2</span>
							</a>
						</li>

						<li>
							<a href="#">
								<i class="fa fa-window-restore"></i> 
								<span>Navigation 3</span>
							</a>
						</li> 
						
						<li>
							<a href="#">
								<i class="fa fa-calendar"></i> 
								<span>Navigation 3</span>
							</a>
						</li> 
						
						
						<li>
							<a href="">
								<i class="fa fa-signal"></i> 
								<span>Log Out</span>
							</a>
						</li>
					</ul>
				</div>
			</aside>
			<div class="main">
				<div class="breadcrumb">
					

                     <!-- Trigger/Open The Modal -->
                    <button id="myBtn">Register New Document</button>
                    
                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                    
                      <!-- Modal content -->
                      <div class="modal-content">
                        <span class="close">&times;</span>
                     <form>
                        <div class="form-group">
                            <label for=""> Email address</label>
                            <input class="form-control" placeholder="Enter email" type="email">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for=""> Password</label>
                                    <input class="form-control" placeholder="Password" type="password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Confirm Password</label>
                                    <input class="form-control" placeholder="Password" type="password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for=""> Regular select</label>
                            <select class="form-control">
                                <option selected="true">Australia</option>
                                <option>Nigeria</option>
                                <option>United States</option>
                                <option>Japan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for=""> Multiselect</label>
                            <select class="form-control select2" multiple="true">
                                <option selected="true">Australia</option>
                                <option selected="true">Nigeria</option>
                                <option>United States</option>
                                <option>Japan</option>
                            </select>
                        </div>
                        <div class="form-section">
                            <span>Form Section</span>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for=""> First Name</label>
                                    <input class="form-control" placeholder="First Name" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Last Name</label>
                                    <input class="form-control" placeholder="Last Name" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for=""> Date Picker</label>
                                    <input class="single-daterange form-control" placeholder="Date of birth" type="text" value="04/12/1978">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">@</div>
                                        <input class="form-control" placeholder="Username" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for=""> Date Range Picker</label>
                            <input class="multi-daterange form-control" type="text" value="03/31/2017 - 04/06/2017">
                        </div>
                        <div class="form-group">
                            <label>Example textarea</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="check-label"><input type="checkbox"> I agree to terms and conditions</label>
                        </div>
                    </form>
                    <div class="content-box-footer">
                        <button class="btn btn-primary">Save</button>
                    </div>
                      </div>
                    
                    </div> 


				</div>
				<div class="content">
					<div class="panel">
						<div class="content-header no-mg-top">
							<i class="fa fa-newspaper-o"></i>
							<div class="content-header-title">Table</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="content-box">
									<div class="content-box-header">
										
									</div>
									<div class="table-responsive">
										<table class="table table-striped table-bordered">
											<thead>
												<tr>
													<th class="text-center"><input type="checkbox"></th>
													<th>Document Name</th>
													<th class="text-center">Tracking Number</th>
													<th class="text-center">Destination</th>
													<th class="text-right">Origin</th>
													<th class="text-center">Classification</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th class="text-center"><input type="checkbox"></th>
													<td class="nowrap">Iphone 6</td>
													<td class="text-center">
														<span class="badge badge-yellow">Fullstack Administrator</span>
													</td>
													<td class="text-center">
														<div class="status-pill green"></div>
													</td>
													<td class="text-right">$22</td>
													<td class="text-center"><i class="fa fa-pencil"></i> <i class="fa fa-trash"></i></td>
												</tr>
												<tr>
													<th class="text-center"><input type="checkbox"></th>
													<td class="nowrap">Iphone 6</td>
													<td class="text-center">
														<span class="badge badge-red">Frontend Developer</span>
													</td>
													<td class="text-center">
														<div class="status-pill green"></div>
													</td>
													<td class="text-right">$22</td>
													<td class="text-center"><i class="fa fa-pencil"></i> <i class="fa fa-trash"></i></td>
												</tr>
												<tr>
													<th class="text-center"><input type="checkbox"></th>
													<td class="nowrap">Iphone 6</td>
													<td class="text-center">
														<span class="badge badge-grey">QA</span>
													</td>
													<td class="text-center">
														<div class="status-pill green"></div>
													</td>
													<td class="text-right">$22</td>
													<td class="text-center"><i class="fa fa-pencil"></i> <i class="fa fa-trash"></i></td>
												</tr>
												<tr>
													<th class="text-center"><input type="checkbox"></th>
													<td class="nowrap">Iphone 6</td>
													<td class="text-center">
														<span class="badge badge-red">Project Manager</span>
													</td>
													<td class="text-center">
														<div class="status-pill green"></div>
													</td>
													<td class="text-right">$22</td>
													<td class="text-center"><i class="fa fa-pencil"></i> <i class="fa fa-trash"></i></td>
												</tr>
												<tr>
													<th class="text-center"><input type="checkbox"></th>
													<td class="nowrap">Iphone 6</td>
													<td class="text-center">
														<span class="badge badge-yellow">Graphic Designer</span>
													</td>
													<td class="text-center">
														<div class="status-pill green"></div>
													</td>
													<td class="text-right">$22</td>
													<td class="text-center"><i class="fa fa-pencil"></i> <i class="fa fa-trash"></i></td>
												</tr>
												<tr>
													<th class="text-center"><input type="checkbox"></th>
													<td class="nowrap">Iphone 6</td>
													<td class="text-center">
														<span class="badge badge-grey">Fullstack Developer</span>
													</td>
													<td class="text-center">
														<div class="status-pill green"></div>
													</td>
													<td class="text-right">$22</td>
													<td class="text-center"><i class="fa fa-pencil"></i> <i class="fa fa-trash"></i></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="content-box-footer">
										<div class="row">
											<div class="col-md-3 form-inline sm-max sm-text-center">
												<select class="form-control sm-max">
													<option>5</option>
													<option>10</option>
													<option>20</option>
													<option>25</option>
													<option>50</option>
													<option>100</option>
												</select>
											</div>
											<div class="col-md-3 form-inline sm-max sm-mgtop-5 sm-text-center">Showing 10 of 100 list</div>
											<div class="col-md-6 sm-max">
												<ul class="pagination pull-right sm-mgtop-5">
													<li><a href="#">First</a></li>
													<li><a href="#">Prev</a></li>
													<li class="active"><a href="#">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">Next</a></li>
													<li><a href="#">Last</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@stop