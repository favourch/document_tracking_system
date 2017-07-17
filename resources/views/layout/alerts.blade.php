@if(Session::has('success'))
	<div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        </button>
        <strong>{{Session::get('success') }}</strong>
    </div>
@endif
@if(Session::has('danger'))
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        </button>
        <strong>{{Session::get('danger') }}</strong>
    </div>
@endif
@if(Session::has('warning'))
    <div class="alert alert-warning alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        </button>
        <strong>{{Session::get('warning') }}</strong>
    </div>
@endif
@if(Session::has('info'))
    <div class="alert alert-info alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        </button>
        <strong>{{Session::get('info') }}</strong>
    </div>
@endif
