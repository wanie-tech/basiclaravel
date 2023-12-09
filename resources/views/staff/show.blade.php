@extends('staff.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Employee Profile Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $staff->name }}</h5>
        <p class="card-text">Address : {{ $staff->address }}</p>
        <p class="card-text">Mobile : {{ $staff->mobile }}</p>
        <p class="card-text"> Profile Image :            
          <div class="col-sm-10">
            <img id="showImage" class="rounded avatar-lg" src="{{ asset($staff->profileimage) }}" alt="Card image cap">
          </div></p>
        </div>
  </div>
</div>