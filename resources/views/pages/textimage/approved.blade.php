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
                  <h5 class="card-title">Approved Image and Datas</h5>
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
                          <th>Delete</th>
                          @endcan
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
                            @if($hod1->status==1)
                            Approved
                            @else
                            Pending
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
                                <form action="{{route('textimage.destroy',[$hod1->id])}}" method="POST"> @csrf
                                    {{method_field('DELETE')}}
                                    @foreach($photos as $new)
                                    @if($hod1->id == $new->id)
                                    <input type="hidden" name="newid" value="{{$new->photo_id}}">
                                    @endif
                                    @endforeach
                                    <button type="submit" class="btn btn-danger">Delete</button>

                        </form>



                      {{-- Modal --}}

            </td>
            @endcan
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
