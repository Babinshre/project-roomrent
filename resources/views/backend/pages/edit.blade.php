@extends('backend.app')

@section('content')
    <div class="container p-5">
      <div class="form">
          <h3>Edit Post</h3>
          <form action="/post/{{$post->id}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="form-group">
                <label for="location">Location</label>
                <input value="{{ $post->location }}" type="text" name="location" id="location" class="form-control" placeholder="Enter a location" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" name="type" id="type" >
                   @if ($post->type == 'flat')
                   <option value="flat">flat</option>
                   <option value="room">room</option>
                   @else{
                       <option value="flat">room</option>
                       <option value="room">flat</option>
                   }
                   @endif
                </select>
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input value="{{ $post->price }}" type="text" name="price" id="price" class="form-control" placeholder="price (rs)" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="size">Room size</label>
                <input value="{{ $post->size }}" type="text" name="size" id="size" class="form-control" placeholder="(length x breadth)cm" aria-describedby="helpId">
              </div>
              <div class="form-group">
                  <label for="for">For</label>
                  <select class="form-control" name="for" id="for">
                    @if ($post->for == 'student')
                    {
                        <option value="student">student</option>
                        <option value="family">family</option>
                        <option value="others">others</option>
                    }
                    @elseif($post->for == 'family'){
                        <option value="family">family</option>
                        <option value="student">student</option>
                        <option value="others">others</option>
                    }
                    @elseif($post->for == 'others'){
                        <option value="others">others</option>
                        <option value="family">family</option>
                        <option value="student">student</option>
                    }
                    @endif
                    
                  </select>
              </div>
              <div class="form-group">
                <label for="">Description</label>
                <textarea  class="form-control" name="description" id="description" rows="3" placeholder=""> {{ $post->description }}</textarea>
              </div>
              <div class="form-group">
                <label for="image_feature">Image_feature</label>
                <input value="{{ $post->image_feature }}" type="file" class="form-control-file" name="image_feature" id="image_feature" placeholder="" aria-describedby="fileHelpId">
              </div>
              <div class="form-group">
                  <label for="images">Images</label>
                  <input value="{{ $post->images }}" multiple type="file" class="form-control-file" name="Images" id="Images" placeholder="" aria-describedby="fileHelpId">
              </div>
              <div class="form-group">
                <label for="owner_email">Email</label>
                <input value="{{ $post->owner_email }}" type="email" class="form-control" name="owner_email" id="owner_email" aria-describedby="emailHelpId" placeholder="Enter your email">
              </div>
              <div class="form-group">
                <label for="owner_phone">Phone number</label>
                <input value="{{ $post->owner_phone }}" type="tel" name="owner_phone" id="owner_phone" class="form-control" placeholder="Enter your phone number" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" name="status" id="status">
                  @if ($post->status=='available')
                  <option value="available">available</option>
                  <option value="not available">not available</option>
                  @else
                  <option value="not available">not available</option>
                  <option value="available">available</option>
                  @endif
                </select>
              </div>
              <button type="submit" class="btn btn-primary btm-small">Submit</button>
          </form>
      </div>
    </div>
@endsection