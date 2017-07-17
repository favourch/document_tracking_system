@extends('layout.main')

@section('content')

<div class="content-w">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="index-2.html">Beneficiaries</a></li>
                    
                </ul>
                <div class="content-i">
                    <div class="content-box">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <div class="element-actions">
                                        <form class="form-inline justify-content-sm-end">
                                            <select class="form-control form-control-sm rounded">
                                                <option value="Pending">Today</option>
                                                <option value="Active">Last Week </option>
                                                <option value="Cancelled">Last 30 Days</option>
                                            </select>
                                        </form>
                                    </div>
                                    <h6 class="element-header">Upload Dashboard</h6>
                                    <div class="element-content">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="element-box el-tablo">
                                                    <div class="label">Number of Beneficiaries</div>
                                                    <div class="value">{{$bulk_upload->count()}}</div>
                                                    <div class="trending trending-up"><span>12%</span><i class="os-icon os-icon-arrow-up2"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="element-box el-tablo">
                                                    <div class="label">This Week</div>
                                                    <div class="value">457</div>
                                                    <div class="trending trending-down-basic"><span>12%</span><i class="os-icon os-icon-arrow-2-down"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="element-box el-tablo">
                                                    <div class="label">New Uploads</div>
                                                    <div class="value">125</div>
                                                    <div class="trending trending-down-basic"><span>9%</span><i class="os-icon os-icon-graph-down"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       <!-- alerts-->
                        <div style="width:400px; height:auto; margin:0 auto; text-align:center; ">
                            @include('layout.alerts')
                        </div>
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
                        
    
@stop




