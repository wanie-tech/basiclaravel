@extends('staff.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Employee</div>
  <div class="card-body">
    <form action="{{ url('staff/' .$staff->id) }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$staff->id}}" id="id" />
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{$staff->name}}" class="form-control"></br>
            <label>Address</label></br>
            <input type="text" name="address" id="address" value="{{$staff->address}}" class="form-control"></br>
            <label>Mobile</label></br>
            <input type="text" name="mobile" id="mobile" value="{{$staff->mobile}}" class="form-control"></br>

            <!--<div class="row mb-3">-->
                <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image </label>
                <!--<div class="col-sm-10">-->
                <input name="profileimage" class="form-control" type="file" id="profileimage">
                <!--</div>-->
            <!--</div>-->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
                <img id="showImage" class="rounded avatar-lg" src="{{ asset($staff->profileimage) }}" alt="Card image cap">
                </div>
            </div>




            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
  </div>
</div>
  
@stop