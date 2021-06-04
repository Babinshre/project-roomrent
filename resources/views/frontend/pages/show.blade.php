@extends('frontend.app')
@section('content')
    <div class="container">
        <h3 class="mt-5 mb-2">Room details</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/room.jpg') }}" alt="Card image cap">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-5">
                    <p><i class="fa fa-map-marker-alt"></i>Location : {{ $room->location }}</p>
                    <p><i class="fas fa-share-square"></i>For : {{ $room->for }}</p>
                    <p><i class="fa fa-phone-alt"></i>Owner phone : {{ $room->owner_phone }}</p>
                    <p><i class="fa fa-envelope"></i>owner_email : {{ $room->owner_email }}</p>
                    <p><i class="fa fa-hand-holding-usd"></i>Price (npr.) : {{ $room->price }}</p>
                    <p><i class="fa fa-house-user"></i>Type : {{ $room->type }}</p>
                    <p><i class="fa fa-sticky-note"></i>Description : 
                        <p style="color: grey; font-size:15px; padding: 10px; border:1px solid rgb(187, 186, 186); border-radius: 2px">
                            {{ $room->description }}
                        </p>
                    <p><i class="fa fa-toggle-on"></i>Status : 
                        @if ($room->status=='available')
                            <span style="color: rgb(1, 177, 1)">{{$room->status}}</span>
                            <a href="#" data-toggle="modal" data-target="#myModal" class="d-block btn btn-primary btn-sm">Book now</a>
                            {{-- popup message --}}
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                    <h4 class="modal-title"></h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                      <p>Please contact to respective owner</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                        @else
                            <span style="color: red">{{$room->status}}</span>
                        @endif
                    </p>
                </div> 
            </div>
        </div>
    </div>
@endsection