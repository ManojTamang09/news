@extends('pages.layouts.master')

@section('content')
<div class="page-wrapper">
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    @if ($errors->any())
<div class="alert alert-danger">
 <ul>
     @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
     @endforeach
 </ul>
</div>
@endif

    @if(Session::has('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}
</div>
    @endif
    <div class="row">
      <div class="col-md-8">
    <div class="card">
        <form action="{{ route('slider.update',[$user->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

      <div class="card-body">
        <h4 class="card-title">Edit Video and Text Datas</h4>

        <div class="form-group row">
          <label
            for="lname"
            class="col-sm-3 text-end control-label col-form-label"
            >Slider Title</label
          >
          <div class="col-sm-9">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>
        </div>

       
          <div class="form-group row">
            <label
              for="cono1"
              class="col-sm-3 text-end control-label col-form-label"
              >Upload Slider Photo</label
            >
            <div class="col-sm-9">
                <input id="document" type="file" class="form-control @error('document') is-invalid @enderror" name="document" value="{{ old('document') }}"  autocomplete="document" autofocus>

                  @error('document')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
     

          <div class="form-group row">
            <label
              for="cono1"
              class="col-sm-3 text-end control-label col-form-label"
              >&nbsp;</label
            >
            <div class="col-sm-9">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>

                    </thead>
                    <tbody>

                    </tbody>

                </table>

            </div>
            </div>
          </div>
      </div>
      <div class="border-top">
        <div class="card-body">
          <button type="submit" class="btn btn-primary" style="float: right;">
            Submit
          </button>
        </div>
      </div>

    </form>
  </div>

      </div>
    </div>
</div>
</div>




                @endsection
