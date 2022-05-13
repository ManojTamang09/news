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
        <form action="{{ route('video.update',[$user->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

      <div class="card-body">
        <h4 class="card-title">Edit Video and Text Datas</h4>

        <div class="form-group row">
          <label
            for="lname"
            class="col-sm-3 text-end control-label col-form-label"
            >Heading Name</label
          >
          <div class="col-sm-9">
            <input id="name" type="text" class="form-control @error('heading') is-invalid @enderror" name="heading" value="{{$user->heading}}" required autocomplete="name" autofocus>

                @error('heading')
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
              >Description</label
            >
            <div class="col-sm-9">
                    <textarea name="description" class="form-control" rows="10">{{$user->description}}</textarea>
                  @error('description')
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
              >Upload Title Photo</label
            >
            <div class="col-sm-9">
                <input id="document" type="file" class="form-control @error('title_photo') is-invalid @enderror" name="title_photo" value="{{ old('title_photo') }}"  autocomplete="title_photo" autofocus>

                  @error('title_photo')
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
              >Upload Video</label
            >
            <div class="col-sm-9">
                <input id="document" type="file" class="form-control @error('document') is-invalid @enderror" name="document"   autocomplete="document" autofocus>

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
