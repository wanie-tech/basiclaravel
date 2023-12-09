@extends('staff.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Employee</div>
  <div class="card-body">
    <form action="{{ url('staff') }}" method="post" enctype="multipart/form-data">
    
            {!! csrf_field() !!}
            <label>Name</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Address</label></br>
            <input type="text" name="address" id="address" class="form-control"></br>
            <label>Mobile</label></br>
            <input type="text" name="mobile" id="mobile" class="form-control"></br>

            <!--<div class="row mb-3">-->
                <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image </label>
                <!--<div class="col-sm-10">-->
                  <input name="profileimage" class="form-control" type="file" id="profileimage">
                <!--</div>-->
            <!--</div>-->

            <!--<div class="row mb-3">-->
                <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
                  <img id="showImage" class="rounded avatar-lg" src="{{ url('storage/no_image.jpg') }}" alt="Card image cap">
                </div> 
            <!--</div>-->


            <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>
  
@stop