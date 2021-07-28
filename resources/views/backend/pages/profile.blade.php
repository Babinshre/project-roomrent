@extends('backend.app')
<style>
.image-upload > input {
  visibility:hidden;
  width:0;
  height:0
}
input {
    border:0!important;
    outline:0;
    }
input:focus {
    outline:none!important;
    }
</style>
@section('location')
    profile
@endsection
@section('content')
<div class="container">
    <div class="row m-auto">
        <div class="col">
            <div class=" card">
                <div class="card-header text-center">
                My Profile
                </div>
                <div class="card-body">
                    <form action="/profile-update" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group text-center">
                            <img src="{{ asset(Auth::user()->image) }}" alt="" style="border-radius: 50%" width=" 100px" height="100px">
                            <div class="image-upload">
                                <label for="image">
                                  <p style="font-size:10px; font-family: serif; color:rgb(63, 63, 248)">Change profile picture</p>
                                </label> 
                                <input id="image" accept="image/*" name="image" type="file" />
                              </div>
                          </div>
                        <div class="form-group row">
                          <label class="col-sm-2" for="name">Name :</label>
                          <input value="{{ Auth::user()->name }}" type="text" name="name" id="name" class="form-control col-sm-6" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2" for="email">Email :</label>
                            <input readonly style="background: white" value="{{ Auth::user()->email }}" type="text" name="email" id="email" class="form-control col-sm-6" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2" for="phone">Phone Number :</label>
                            <input value="{{ Auth::user()->phone }}"type="text" name="phone" id="phone" class="form-control col-sm-6" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2" for="address">Address :</label>
                            <input value="{{ Auth::user()->address }}" type="text" name="address" id="address" class="form-control col-sm-6" placeholder="" aria-describedby="helpId">
                        </div>
                        <button type="submit" class="btn btn-primary btn">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection