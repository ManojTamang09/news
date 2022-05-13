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
        <form action="{{ route('usermaster.update',[$user->id])}}" method="POST" enctype="multipart/form-data">
             @csrf
             @method('PUT')
      <div class="card-body">
        <h4 class="card-title">User Info</h4>
        <div class="form-group row">
          <label
            for="fname"
            class="col-sm-3 text-end control-label col-form-label">User Type</label>
          <div class="col-sm-9">
            <select name="role_id"
              class="form-control @error('role_id') is-invalid @enderror" required
              id="fname">
              <option>--Select--</option>
              <option value="Administrator">Administrator</option>
              <option value="User">User</option>

               </select>
               @error('role_id')
               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
          </div>
        </div>
        <div class="form-group row">
          <label
            for="lname"
            class="col-sm-3 text-end control-label col-form-label"
            >Name</label
          >
          <div class="col-sm-9">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" id="exampleInputEmail1" >

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>
        </div>
        <div class="form-group row">
          <label
            for="lname"
            class="col-sm-3 text-end control-label col-form-label"
            >Email</label
          >
          <div class="col-sm-9">
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" id="exampleInputEmail1" >

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label
            for="email1"
            class="col-sm-3 text-end control-label col-form-label"
            >Password</label
          >
          <div class="col-sm-9">
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required id="password" >

                        @error('password')
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
            >Re Type Password</label
          >
          <div class="col-sm-9">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

          </div>
        </div>
        <div class="form-group row">
            <label
              for="cono1"
              class="col-sm-3 text-end control-label col-form-label"
              >Contact No</label
            >
            <div class="col-sm-9">
                <input id="contact" type="number" class="form-control @error('contact') is-invalid @enderror" value="{{$user->contact}}" name="contact" required >

                @error('contact')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
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
