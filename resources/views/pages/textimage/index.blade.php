@extends('pages.layouts.master')
@section('content')

        <div class="container-fluid">

            <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12">

                @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                    </div>
                @endif



              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Pending Image and Datas</h5>
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
                          <th>Photos</th>
                          @can('manage-users')
                          <th>Approve</th>
                          <th>Delete</th>
                          @endcan
                          @if(!Gate::allows('manage-users'))
                          <th>Edit</th>
                            @endif
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($images)>0)
                        @foreach($images as $key => $hod1)
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$hod1->heading}}</td>
                          <td>{{$hod1->description}}</td>
                          <td>
                            @if($hod1->status==0)
                            Pending
                            @else
                            Approved
                            @endif
                        </td>

                          <td>
                            @foreach (App\Models\User::all() as $use)
                            @foreach (App\Role::all() as $search)
                                    @if($use->id==$hod1->user_id && $use->role_id==$search->id)
                                    {{$search->name}}
                                    @endif
                                @endforeach
                            @endforeach

                            </td>
                            <td>


                                @foreach($photos as $ath)
                                @endforeach
                                @if($hod1->id != $ath->photo_id)
                                N/A

                                @else
                            <?php $i=1 ?>

                            @foreach($photos as $ath)
                            @if($hod1->id == $ath->photo_id)
                            {{-- <div id="{{$ath->id}}"> --}}

                                <p>&nbsp;<b><a href="{{asset('photos')}}/{{$ath->photo}}" target="_blank">Attachment {{$i++}}</b>&emsp;</a>


                                {{-- </div> --}}
                                    @endif

                            @endforeach
                            @endif
                            </div>
                                    </div>
                                    </div>


                                </td>
                                @can('manage-users')
                               <td>

                                        <button type="button" class="btn btn-primary fas fa-check" data-bs-toggle="modal" data-bs-target="#myModal">
                                            Approve
                                          </button>


                                                            </td>

                                <!-- The Modal -->
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                        <h4 class="modal-title">Approve Data</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">

                                            <form action="{{route('approve',[$hod1->id])}}" method="POST" enctype="multipart/form-data">
                                                 @csrf

                                                <div class="form-group row">
                                                    <label
                                                      for="lname"
                                                      class="col-sm-3 text-end control-label col-form-label"
                                                      >Status</label
                                                    >
                                                    <div class="col-sm-9">
                                                <select class="form-control" name="status" required>
                                                    <option value="1">Approve</option>
                                                </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                <button type="submit" class="btn btn-danger" style="float:right;">Approve</button>
                                                </div>
                                                </div>
                                    </form>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                    </div>
                                </div>
                                <!-- end modal -->

                                <td>
                                    <form action="{{route('textimage.destroy',[$hod1->id])}}" method="POST"> @csrf
                                        {{method_field('DELETE')}}
                                        @foreach($photos as $new)
                                        @if($hod1->id == $new->id)
                                        <input type="hidden" name="newid" value="{{$new->photo_id}}">
                                        @endif
                                        @endforeach
                                        <button type="submit" class="btn btn-danger">Delete</button>

                            </form>


                </td>
                                @endcan
                                @if(!Gate::allows('manage-users'))
                                <td> <a href="{{route('textimage.edit',[$hod1->id])}}">
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
