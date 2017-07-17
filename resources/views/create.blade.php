<!DOCTYPE html>
<html>

<head>
    <title>N-Power Database Registration</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Adewumi Ademola" name="author">
    <meta content="N-Power Database" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="{{URL::asset('favicon.png')}}" rel="shortcut icon">
    <link href="{{URL::asset('apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{URL::asset('bower_components/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('../fast.fonts.net/cssapi/175a63a1-3f26-476a-ab32-4e21cbdb8be2.css')}}" rel="stylesheet">
    <link href="{{URL::asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{URL::asset('bower_components/dropzone/dist/dropzone.css')}}" rel="stylesheet">
    <link href="{{URL::asset('bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('bower_components/datatables/media/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('bower_components/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">
</head>

<body>
    <div class="all-wrapper with-pattern">
        <div class="auth-box-w wider">
            <div class="logo">
                <a href="#"><center><img  style="margin-top:20px;" alt="" src="{{URL::asset('img/kglogo.png')}}"></center></a>
            </div>
            <h4 class="auth-header">Create Admin account</h4>
            <form action="{!!URL::route('post-create')!!}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for=""> Email address</label>
                    <input class="form-control" name="email" placeholder="Enter email" type="email">
                    <div class="pre-icon os-icon os-icon-email-2-at2"></div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Full Names</label>
                            <input class="form-control" name="fname" placeholder="Full Names" type="text">
                            <div class="pre-icon os-icon os-icon-fingerprint"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Staff Id</label>
                            <input class="form-control" placeholder="Staff Id" name="staffid" type="text">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for=""> Password</label>
                            <input class="form-control" placeholder="Password" name="password" type="password">
                            <div class="pre-icon os-icon os-icon-fingerprint"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input class="form-control" placeholder="Password" name="re-type-password" type="password">
                        </div>
                    </div>
                </div>
                <div class="buttons-w">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" id="send" value="Create New Administrator" class="btn btn-white btn-sm">
                    <a class="btn btn-white btn-sm" href="{{URL::route('dashboard')}}"><i class="os-icon os-icon-wallet-loaded"></i><span>Back to Dashboard</span></a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>