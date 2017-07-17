@extends('layout.main')

@section('content')
<div class="content-w">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><span>List of Applicants</span></li>
                </ul>
                <div class="content-i">
                    <div class="content-box">
                        <div class="element-wrapper">
                            <h6 class="element-header">Data Tables</h6>
                            <div class="element-box">
                                <h5 class="form-header">N-Power Database</h5>
                                <div class="form-desc">List of N-power Applicants and Beneficiaries</div>
                                <div class="table-responsive">
                                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                                        <thead>
                                            <tr>
                                                <th>Names</th>
                                                <th>Phone</th>
                                                <th>Lga of Residence</th>
                                                <th>Program</th>
                                                <th>Reference Id</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Names</th>
                                                <th>Phone</th>
                                                <th>Lga of Residence</th>
                                                <th>Program</th>
                                                <th>Reference Id</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        	@foreach($bulk_upload as $app)
                                            <tr>
                                                <td>{{ e($app->fname) }}</td>
                                                <td>{{ e($app->phone) }}</td>
                                                <td>{{ e($app->lga_of_residence) }}</td>
                                                <td>{{ e($app->program) }}</td>
                                                <td>{{ e($app->npower_id) }}</td>
                                                <td>
                                                	<a class="btn btn-sm btn-info" href="#openModal">Edit</a>
                                                    <div id="openModal" class="modalDialog">&nbsp;&nbsp;&nbsp;
                                                    <a href="#close" title="Close" class="close">X</a>
                                                        First Name: <input type="text" value="{{ e($app->fname) }}" /><br />
                                                        Last Name: <input type="text" value="{{ e($app->phone) }}" /><br />
                                                        Program: <input type="text" value="{{ e($app->lga_of_residence) }}" /><br />
                                                        <center><input class="btn btn-info" type="submit" name="" value="Save" /></center>
                                                        &nbsp;&nbsp;&nbsp;
                                                    </div>
												</td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
@stop

