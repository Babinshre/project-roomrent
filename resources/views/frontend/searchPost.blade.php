@extends('frontend.app')
@section('content')
    <div class="container">
        <h5 class="mt-5">Search Results</h5>
        <div class="availablePosts">
            <div class="row">
              @foreach ($rooms as $room)
              <div class="col-md-3">
                <div class="card">
                  <img class="card-img-top" src="{{ $room->image_feature }}" alt="Card image cap" style="height: 180px">
                  <div class="card-body">
                    <h5 class="card-title">for :  {{ $room->for }}</h5>
                    <h6>price Rs: {{ $room->price }}</h6>
                    <span>
                      @if ($room->status=='available')
                          <p style="color: rgb(1, 177, 1)">{{$room->status}}</p>
                      @else
                          <p style="color: red">{{$room->status}}</p>
                      @endif
                    </span>
                    <p class="card-text"><i class="fas fa-map-marker-alt"></i>{{ $room->location }}</p> 
                    <a href="room/{{$room->id}}" class="btn btn-primary">see details..</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <div class="findmore">
              <a href="room" type="" class="btn">Find More  <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
    </div>
@endsection