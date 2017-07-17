@extends('layout.main')

@section('content')
<div class="content-w">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="index-2.html">Dashboard</a></li>
                    <li class="breadcrumb-item"><span>Add an Applicant</span></li>
                </ul>
                <div class="content-i">
                    <div class="content-box">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <div class="element-box">
                                     <!-- alerts-->
                        <div style="width:400px; height:auto; margin:0 auto; text-align:center; ">
                            @include('layout.alerts')
                        </div>
                                        <form action="{!!URL::route('post-add-applicant')!!}" method="post" enctype="multipart/form-data">
                                            <h5 class="form-header">Registration Form</h5>
                                            <div class="form-desc">Registration of N-Power Applicants</div>
                                            
                                                    <div class="form-group">
                                                        <label for="state_of_residence">Program</label>
                                                        <select name="program" class="form-control select2" id="program">
                                                            <option value="N-Agro">N-Agro</option>
                                                            <option value="N-Health">N-Health</option>
                                                            <option value="N-Teach">N-Teach</option>
                                                            <option value="N-Tax">N-Tax</option>
                                                        </select>
                                                    </div>
                                            <fieldset class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="state_of_residence"> First Name</label>
                                                            <input name="fname" type="text" required class="form-control" id="fname" placeholder="First Name" data-error="Please input your First Name">
                                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="state_of_residence">Middle Name</label>
                                                            <input name="mname" type="text" required class="form-control" id="mname" placeholder="Middle Name" data-error="Please input your Middle Name">
                                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="state_of_residence">Last Name</label>
                                                            <input name="lname" type="text" required class="form-control" id="lname" placeholder="Last Name" data-error="Please input your Last Name">
                                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="gender">Gender</label>
                                                            <select name="gender" class="form-control select2" id="gender">
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="state_of_residence">Email</label>
                                                            <input name="email" type="email" required class="form-control" id="email" placeholder="Email" data-error="Please input your Email">
                                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="state_of_residence">Marital Status</label>
                                                            <select name="marital" class="form-control select2" id="marital">
                                                            <option value="Single">Single</option>
                                                            <option value="Married">Married</option>
                                                            <option value="Divorced">Divorced</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="state_of_residence"> Date of Birth</label>
                                                            <input name="dob" type="text" class="single-daterange form-control" id="dob" placeholder="Date of birth" value="04/12/1978">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="state_of_residence">Phone</label>
                                                            <div class="input-group">
                                                              <div class="input-group-addon">#</div>
                                                                <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone Number">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="state_of_residence">State Of Origin</label>
                                                            <select name="state" class="form-control select2" id="state">
                                                                <option value="Abuja FCT">Abuja FCT</option>
                                                                <option value="Abia">Abia</option>
                                                                <option value="Adamawa">Adamawa</option>
                                                                <option value="Akwa Ibom">Akwa Ibom</option>
                                                                <option value="Anambra">Anambra</option>
                                                                <option value="Bauchi">Bauchi</option>
                                                                <option value="Bayelsa">Bayelsa</option>
                                                                <option value="Benue">Benue</option>
                                                                <option value="Borno">Borno</option>
                                                                <option value="Cross River">Cross River</option>
                                                                <option value="Delta">Delta</option>
                                                                <option value="Ebonyi">Ebonyi</option>
                                                                <option value="Edo">Edo</option>
                                                                <option value="Ekiti">Ekiti</option>
                                                                <option value="Enugu">Enugu</option>
                                                                <option value="Gombe">Gombe</option>
                                                                <option value="Imo">Imo</option>
                                                                <option value="Jigawa">Jigawa</option>
                                                                <option value="Kaduna">Kaduna</option>
                                                                <option value="Kano">Kano</option>
                                                                <option value="Katsina">Katsina</option>
                                                                <option value="Kebbi">Kebbi</option>
                                                                <option value="Kogi">Kogi</option>
                                                                <option value="Kwara">Kwara</option>
                                                                <option value="Lagos">Lagos</option>
                                                                <option value="Nassarawa">Nassarawa</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Ogun">Ogun</option>
                                                                <option value="Ondo">Ondo</option>
                                                                <option value="Osun">Osun</option>
                                                                <option value="Oyo">Oyo</option>
                                                                <option value="Plateau">Plateau</option>
                                                                <option value="Rivers">Rivers</option>
                                                                <option value="Sokoto">Sokoto</option>
                                                                <option value="Taraba">Taraba</option>
                                                                <option value="Yobe">Yobe</option>
                                                                <option value="Zamfara">Zamfara</option>
                                                                <option value="Outside Nigeria">Outside Nigeria</option>
                                                            </select>
                                                           </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="state_of_residence">Local Government Area</label>
                                                            <div class="input-group">
                                                                <input name="lga" type="text" class="form-control" id="lga" placeholder="Local Government Area">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                        <div class="form-group">
                                                            <label for="state_of_residence">Residential Address</label>
                                                            <input name="residence" type="text" class="form-control" id="residence" placeholder="Residential Address">
                                                        </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="state_of_residence">State of Residence</label>
                                                            <select name="state_of_residence" class="form-control select2" id="state_of_residence">
                                                                <option value="Abuja FCT">Abuja FCT</option>
                                                                <option value="Abia">Abia</option>
                                                                <option value="Adamawa">Adamawa</option>
                                                                <option value="Akwa Ibom">Akwa Ibom</option>
                                                                <option value="Anambra">Anambra</option>
                                                                <option value="Bauchi">Bauchi</option>
                                                                <option value="Bayelsa">Bayelsa</option>
                                                                <option value="Benue">Benue</option>
                                                                <option value="Borno">Borno</option>
                                                                <option value="Cross River">Cross River</option>
                                                                <option value="Delta">Delta</option>
                                                                <option value="Ebonyi">Ebonyi</option>
                                                                <option value="Edo">Edo</option>
                                                                <option value="Ekiti">Ekiti</option>
                                                                <option value="Enugu">Enugu</option>
                                                                <option value="Gombe">Gombe</option>
                                                                <option value="Imo">Imo</option>
                                                                <option value="Jigawa">Jigawa</option>
                                                                <option value="Kaduna">Kaduna</option>
                                                                <option value="Kano">Kano</option>
                                                                <option value="Katsina">Katsina</option>
                                                                <option value="Kebbi">Kebbi</option>
                                                                <option value="Kogi">Kogi</option>
                                                                <option value="Kwara">Kwara</option>
                                                                <option value="Lagos">Lagos</option>
                                                                <option value="Nassarawa">Nassarawa</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Ogun">Ogun</option>
                                                                <option value="Ondo">Ondo</option>
                                                                <option value="Osun">Osun</option>
                                                                <option value="Oyo">Oyo</option>
                                                                <option value="Plateau">Plateau</option>
                                                                <option value="Rivers">Rivers</option>
                                                                <option value="Sokoto">Sokoto</option>
                                                                <option value="Taraba">Taraba</option>
                                                                <option value="Yobe">Yobe</option>
                                                                <option value="Zamfara">Zamfara</option>
                                                                <option value="Outside Nigeria">Outside Nigeria</option>
                                                            </select>
                                                            </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="state_of_residence">Local Government Of Residence</label>
                                                            <div class="input-group">
                                                                <input name="lga_of_residence" type="text" class="form-control" id="lga_of_residence" placeholder="Local Government of Residence">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="state_of_residence">BVN</label>
                                                           <input name="bvn" type="text" class="form-control" id="bvn" placeholder="Enter BVN">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="state_of_residence">Account Number</label>
                                                            <div class="input-group">
                                                                <input name="account_number" type="text" class="form-control" id="account_number" placeholder="Account Number">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="state_of_residence">Bank Name</label>
                                                           <input name="bank_name" type="text" class="form-control" id="bank_name" placeholder="Enter Bank Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="state_of_residence">Discipline</label>
                                                            <div class="input-group">
                                                                <input name="discipline" type="text" class="form-control" id="disability" placeholder="Enter Discipline">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                          <label for="state_of_residence">Disability</label>
                                                            <select name="disability" class="form-control select2" id="disability">
                                                            <option value="Hearing/Speech">Hearing/Speech</option>
                                                            <option value="Sight">Sight</option>
                                                            <option value="Locomotive/Limbs">Locomotive/Limbs</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                          <label for="state_of_residence">Qualification</label>
                                                            <select name="degree" class="form-control select2" id="degree">
                                                            <option value="Bsc">Bsc</option>
                                                            <option value="Hnd">Hnd</option>
                                                            <option value="Nce">Nce</option>
                                                            <option value="Ond">Ond</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                      <div class="form-group">
                                                        <label for="state_of_residence">Post Graduate Level</label>
                                                         <input name="pg" type="text" class="form-control" id="pg" placeholder="Post Graduate Level">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="state_of_residence">Last Institution Attended</label>
                                                            <div class="input-group">
                                                                <input name="last_inst" type="text" class="form-control" id="last_inst" placeholder="Last Institution Attended">
                                                            </div>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                          <label for="state_of_residence">NYSC</label>
                                                            <select name="nysc" class="form-control select2" id="nysc">
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="state_of_residence">Employment</label>
                                                          <select name="employment" class="form-control select2">
                                                            <option value="No">No</option>
                                                            <option value="Yes">Yes</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                </div>
                                              <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="state_of_residence">Skill and Experience</label>
                                                          <select name="skills" multiple="true" class="form-control select2">
                                                        	<option value="">What Skills do you have?</option>
                                                            <option value="Server Administration">Server Administration</option>
                                                            <option value="Computer Graphics">Computer Graphics</option>
                                                            <option value="Computer Programming">Computer Programming</option>
                                                            <option value="Database Management">Database Management</option>
                                                            <option value="Animation">Animation</option>
                                                            <option value="Networking">Networking</option>
                                                            <option value="Hardware">Hardware</option>
                                                            <option value="Development of Computer Generated Images">Development of Computer Generated Images</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="state_of_residence">Reference ID</label>
                                                            <div class="input-group">
                                                                <input name="npower_id" type="text" class="form-control" id="last_inst" placeholder="Reference ID">
                                                            </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="form-buttons-w">
                                                <button class="btn btn-primary" type="submit"> Submit</button>
                                            </div>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-panel">
                        <div class="element-wrapper">
                            <h6 class="element-header">Support Agents Online</h6>
                            <div class="element-box-tp">
                                <div class="profile-tile">
                                    <div class="profile-tile-box">
                                        <div class="pt-avatar-w"><img alt="" src="{{URL::asset('img/avatar1.jpg')}}"></div>
                                        <div class="pt-user-name">{{ e($user->fname) }}</div>
                            			<div class="logged-user-role">{{ e($user->position) }}</div>
                                    </div>
                                    <div class="profile-tile-meta">
                                        <ul>
                                            <li>Last Login:<strong>Online Now</strong></li>
                                            <li>Tickets:<strong>12</strong></li>
                                            <li>Response Time:<strong>2 hours</strong></li>
                                        </ul>
                                        <div class="pt-btn"><a class="btn btn-success btn-sm" href="#">Send Message</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="note-box">
                            <h5 class="note-header">Message</h5>
                            <div class="note-content">Kindly take your time to carefully enter the details of each applicant carefully so as to avoid errors. Also note that any form submitted cannot be edited except with the permission of a super Administrator.</div>
                        </div>
                    </div>
                </div>
            </div>

@stop




