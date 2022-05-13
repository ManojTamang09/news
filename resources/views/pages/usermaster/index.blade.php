@extends('pages.layouts.master')
@section('content')

@if(Session::has('message'))
<div class="alert alert-success">
    {{Session::get('message')}}
    </div>
@endif

        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12">



              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">User Details</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                            <th>Sl No</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Contact No</th>
                          <th>User Type</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($hod)>0)
                        @foreach($hod as $key => $hod1)
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$hod1->name}}</td>
                          <td>{{$hod1->email}}</td>
                          <td>{{$hod1->contact}}</td>

                          <td>
                            @foreach (App\Role::all() as $search)
                               @if($search->id==$hod1->role_id)
                               {{$search->name}}
                                @endif
                               @endforeach

                            </td>
                          <td> <a href="{{route('usermaster.edit',[$hod1->id])}}">
                            <i class="fas fa-edit"></i>
                              </a></td>



                               <td>
                                <form action="{{route('usermaster.destroy',[$hod1->id])}}" method="POST"> @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger">Delete</button>

                        </form>



                      {{-- Modal --}}

            </td>
                        </tr>
                        @endforeach
                        @endif

                      </tbody>

                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
@endsection
