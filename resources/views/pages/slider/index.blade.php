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
                          <th>Name</th>
                          <th>Photos</th>
                          <th>Delete</th>
                          <th>Edit</th>
                          </tr>
                      </thead>
                      <tbody>
                        @if(count($images)>0)
                        @foreach($images as $key => $hod1)
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$hod1->name}}</td>
                                            <td>
                                <p>&nbsp;<b><a href="{{asset('sliderdoc')}}/{{$hod1->document}}" target="_blank">Attachment </b>&emsp;</a>

                                </td>
                            

                                <td>
                                    <form action="{{route('slider.destroy',[$hod1->id])}}" method="POST"> @csrf
                                        {{method_field('DELETE')}}
                                     
                                        <button type="submit" class="btn btn-danger">Delete</button>

                            </form>


                               </td>
                            
                                <td>
                                   <a href="{{route('slider.edit',[$hod1->id])}}">
                            <i class="fas fa-edit"></i>
                              </a>
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
