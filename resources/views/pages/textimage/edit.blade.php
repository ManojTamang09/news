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
        <form action="{{ route('textimage.update',[$user->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

      <div class="card-body">
        <h4 class="card-title">Edit Image and Datas</h4>

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

                    @if(count($photos))
                    <div class="form-group row">
                        <label
              for="cono1"
              class="col-sm-3 text-end control-label col-form-label"
              > <b>Previous Attachments</b></label
            >
            <div class="col-sm-9">
            <div style="border-style:solid;" >


            <?php $i=1 ?>
            @foreach($photos as $ath)
            @if($user->id == $ath->photo_id)
            <div id="{{$ath->id}}">

                <p>&nbsp;<b><a href="{{asset('photos')}}/{{$ath->photo}}" target="_blank">Attachment {{$i++}}</b>&emsp;</a>

                    <a href="{{route('textimage.delete',[$ath->id])}}"> <button type="button" class="btn btn-danger btn-xs remove">Remove</button>&emsp;</p></a>

                </div>
                    @endif
            @endforeach
            </div>
                    </div>
                    </div>
            @endif
          <div class="form-group row">
            <label
              for="cono1"
              class="col-sm-3 text-end control-label col-form-label"
              >Add Images</label
            >
            <div class="col-sm-9">
                <a href="javascript:void(0);" class="addRow"><button type="button"  class="btn btn-primary">Click to Add        </button>
            </a>
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

<script type="text/javascript">
    function validateImage() {
        var formData = new FormData();

        var file = document.getElementById("img").files[0];

        formData.append("Filedata", file);
        var t = file.type.split('/').pop().toLowerCase();
        if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif" && t != "pdf") {
            alert('Please select a valid image file');
            document.getElementById("img").value = '';
            return false;
        }
        return true;
    }
    </script>

     <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<script>
$('tbody').delegate('.quantity,.budget', 'keyup', function () {
        var tr = $(this).parent().parent();
    });
$('.addRow').on('click', function () {
        addRow();
    });
    function addRow() {
        var tr = '<tr>' +'<td><input type="file" required class="form-control" onchange="validateImage()" id="img"  name="documents[]"></td>' +
'<td><a href="javascript:void(0);" required class="remove1"><button type="button" class="btn btn-danger romove1">Remove </button> </a></td>' +
            '</tr>';
        $('tbody').append(tr);
    }
    $(".remove1").live('click', function () {
        var last = $('tbody tr').length;
        $(this).parent().parent().remove();
    });
</script>

                @endsection
