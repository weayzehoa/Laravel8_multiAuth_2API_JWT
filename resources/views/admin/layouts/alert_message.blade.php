@if ($message = Session::pull('success'))
<div class="row justify-content-center">
    <div class="alert-float alert alert-success alert-dismissible fade show col-6" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{ $message }}</strong>
    </div>
</div>
@endif

@if ($message = Session::pull('error'))
<div class="row justify-content-center">
    <div class="alert-float alert alert-danger alert-dismissible fade show col-6" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{ $message }}</strong>
    </div>
</div>
@endif

@if ($message = Session::pull('warning'))
<div class="row justify-content-center">
    <div class="alert-float alert alert-warning alert-dismissible fade show col-6" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{ $message }}</strong>
    </div>
</div>
@endif

@if ($message = Session::pull('info'))
<div class="row justify-content-center">
    <div class="alert-float alert alert-info alert-dismissible fade show col-6" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{ $message }}</strong>
    </div>
</div>
@endif

@if ($errors->any())
<div class="row justify-content-center">
    <div class="alert-float alert alert-danger alert-dismissible fade show col-6" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>請檢查錯誤訊息!!</strong>
    </div>
@endif
