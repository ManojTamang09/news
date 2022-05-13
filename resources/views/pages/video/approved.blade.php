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
                  <h5 class="card-title">Approved Video and Datas</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                            <th>Sl No</th>
                          <th>Heading</th>
                          <th>Description</th>
                          <th>Status</th>
                          <th>Uploaded By</th>
                          <th>Video</th>
                          @can('manage-users')
                          <th>Delete</th>
                          @endcan
                          @if(auth()->user()->role_id !=1 )
                          <th>Edit</th>
                            @endif
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($videos)>0)
                        @foreach($videos as $key => $hod1)
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$hod1->heading}}</td>
                          <td>{{$hod1->description}}</td>
                          <td>
                              @if($hod1->status==1)
                              Approved
                              @else
                              Pending
                              @endif
                          </td>

                          <td>
                            {{-- @foreach (App\Role::all() as $search)
                               @if($search->id==$hod1->user_id)
                               {{$search->name}}
                                @endif

                               @endforeach --}}
                               @foreach (App\Models\User::all() as $use)
                               @foreach (App\Role::all() as $search)
                                       @if($use->id==$hod1->user_id && $use->role_id==$search->id)
                                       {{$search->name}}
                                       @endif
                                   @endforeach
                               @endforeach

                            </td>
                            <td><a href="{{asset('videodoc')}}/{{$hod1->document}}" target="_blank">Attachment</a></td>
                                @can('manage-users')

                                <td>
                                    <form action="{{route('video.destroy',[$hod1->id])}}" method="POST"> @csrf
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger">Delete</button>

                            </form>
                </td>
                                @endcan
                                @if(auth()->user()->role_id !=1 )
                                <td> <a href="{{route('usermaster.edit',[$hod1->id])}}">
                            <i class="fas fa-edit"></i>
                              </a></td>
                              @endif



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
