@extends('frontend.app')
@section('content')
    <div class="container">
        <h3 class="mt-5" style="">All posts</h3>
        <a href="/" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> back</a>
        <div class="row">
          @foreach ($rooms as $room)
          <div class="col-md-3  mb-4">
            <div class="card">
              <img class="card-img-top" src="{{ $room->image_feature }}" alt="Card image cap" style="height: 180px">
              <div class="card-body">
                <div class="">
                  <span class="card-title" style="font-weight: bold; text-transform:capitalize;">for :  {{ $room->for }}</span>
                  <span class=" {{ $room->status == 'available' ? 'badge badge-success badge-sm' : 'badge badge-danger badge-sm' }} " style="float:right">
                    {{ $room->status == 'available' ? 'Available' : 'Not available' }}
                  </span>
                </div>
                <h6 class="mt-2">price Rs: {{ $room->price }}</h6>

                <p class="card-text"><i class="fas fa-map-marker-alt"></i>{{ $room->location }}</p> 
                <a href="room/{{$room->id}}" class="btn btn-primary">see details..</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        {{ $rooms->render('pagination::bootstrap-4') }}
    </div>
@endsection