@extends('layout.main')

@section('content')
<div class="content-w">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="index-2.html">Dashboard</a></li>
                    <li class="breadcrumb-item"><span>Calendar</span></li>
                </ul>
                <div class="content-i">
                    <div class="content-box">
                        <div class="element-wrapper">
                            <h6 class="element-header">Event Calendar</h6>
                            <div class="element-box">
                                <h5 class="form-header">N-Power Event Calendar</h5>
                                <div class="form-desc">This is to make you keep to dates and timelines on the N-Power Application</div>
                                <div id="fullCalendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@stop