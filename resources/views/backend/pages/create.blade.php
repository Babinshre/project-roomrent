@extends('backend.app')

@section('content')
    <div class="container p-5">
      <div class="form">
          <h3>Create new Post</h3>
          <form action="/room" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" class="form-control" placeholder="Enter a location" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" name="type" id="type">
                  <option value="null">...</option>
                  <option value="room">room</option>
                  <option value="flat">flat</option>
                </select>
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="price (rs)" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="size">Room size</label>
                <input type="text" name="size" id="size" class="form-control" placeholder="(length x breadth)cm" aria-describedby="helpId">
              </div>
              <div class="form-group">
                  <label for="for">For</label>
                  <select class="form-control" name="for" id="for">
                    <option value="null">...</option>
                    <option value="student">student</option>
                    <option value="family">family</option>
                    <option value="others">others</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="add some description.."></textarea>
              </div>
              <div class="form-group">
                <label for="image_feature">Image_feature</label>
                <input type="file" class="form-control-file" name="image_feature" id="image_feature" placeholder="" aria-describedby="fileHelpId">
              </div>
              <div class="form-group">
                  <label for="images">Images</label>
                  <input multiple type="file" class="form-control-file" name="Images" id="Images" placeholder="" aria-describedby="fileHelpId">
              </div>
              <div class="form-group">
                <label for="owner_email">Email</label>
                <input type="email" class="form-control" name="owner_email" id="owner_email" aria-describedby="emailHelpId" placeholder="Enter your email">
              </div>
              <div class="form-group">
                <label for="owner_phone">Phone number</label>
                <input type="tel" name="owner_phone" id="owner_phone" class="form-control" placeholder="Enter your phone number" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" name="status" id="status">
                  <option value="available">available</option>
                  <option value="not available">not available</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary btm-small">Submit</button>
          </form>
      </div>
    </div>
@endsection