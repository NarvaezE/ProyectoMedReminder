{{-- Message --}}
@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong> {{ session('success') }} </strong>
    </div>
@endif

{{-- <div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
      An example success alert with an icon
    </div>
  </div> --}}

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
            <div class="row">
                <strong> {{$errors->first()}} </strong>
            </div>
    </div>
@endif

{{-- <div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>
      An example danger alert with an icon
    </div>
  </div> --}}
