@extends('frontend.app')
@section('carousel')
    <div class="carousel">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="images/slide 1.jpeg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                  <p class="topp">" Good service is our passion "</p>
                  <h5 id="fade">FIND <span style="color: #FFD300">ROOM <span class="bor-bot">IN YOUR</span></span> LOCATION</h5>
                  <p class="bottomp mt-5">No matter what the weather, no matter the situation we are in</p>
                  <a href="#search" class="btn">Find Now</a>
                </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/slide 1.jpeg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                  <p>" Good service is our passion "</p>
                  <h5>FIND <span style="color: #FFD300">ROOM <span class="bor-bot"> YOUR</span></span> LOCATION</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/slide 1.jpeg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                  <p>" Good service is our passion "</p>
                  <h5>FIND <span style="color: #FFD300">ROOM <span class="bor-bot"> YOUR</span></span> LOCATION</h5>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
      
    </div>
@endsection
@section('searchbar')
    <div class="searchbar mt-5">
      <div class="container">
        <div class="search" id="search">
          <div class="titlehead">
            <h5>For rates & availability</h5>
            <p>Search your room</p>
          </div>
          <div class="form" action>
            <form action="/search" method="get">
              @csrf
             
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="location">Location</label>
                      <input type="text" name="location" id="location" class="form-control" placeholder="enter your location.." aria-describedby="helpId">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="type">Type</label>
                      <select class="form-control" name="type" id="type">
                        <option value="room">Room</option>
                        <option value="flat">Flat</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="price">Price</label>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            
                            <input type="number" name="min_price" id="min_price" class="form-control" placeholder="Min-price" aria-describedby="helpId">
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            
                            <input type="number" name="max_price" id="max_price" class="form-control" placeholder="Max-price" aria-describedby="helpId">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 ">
                    <div class="form-group">
                      <label for="for">For</label>
                      <select class="form-control" name="for" id="for">
                        <option value="student">Student</option>
                        <option value="family">Family</option>
                        <option value="others">Others</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
                <div class="sub-btn">
                  <button type="submit" class="btn">check availability</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('availablePost')
    <div class="posts" id="posts">
      <div class="container">
        <div class="titlehead">
          <h5>Available <span class="bor-botm">rooms</span> & flats</h5>
          <p>find your rooms, for your availability</p>
        </div>
        <div class="availablePosts">
          <div class="row">
            @foreach ($rooms as $room)
            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top" src="{{ seure_asset('public/'.$room->image_feature)  }}" alt="Card image cap" style="height: 180px">
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
          <div class="findmore">
            <a href="/room" type="" class="btn">Find More  <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
@endsection