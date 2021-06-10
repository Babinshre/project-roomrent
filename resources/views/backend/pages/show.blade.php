@extends('backend.app')
@section('content')
    <div class="container">
        <h3 class="mt-5 mb-2">Post details</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/room.jpg') }}" alt="Card image cap">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-5">
                    <p><i class="fa fa-map-marker-alt"></i>Location : {{ $post->location }}</p>
                    <p><i class="fas fa-share-square"></i>For : {{ $post->for }}</p>
                    <p><i class="fa fa-phone-alt"></i>Owner phone : {{ $post->owner_phone }}</p>
                    {{-- use of relation btn room and user--}}
                    <p><i class="fas fa-user-alt"></i>Owner : {{ $post->user->name }}</p> 
                    <p><i class="fa fa-envelope"></i>owner_email : {{ $post->owner_email }}</p>
                    <p><i class="fa fa-hand-holding-usd"></i>Price (npr.) : {{ $post->price }}</p>
                    <p><i class="fa fa-house-user"></i>Type : {{ $post->type }}</p>
                    <p><i class="fa fa-sticky-note"></i>Description : 
                        <p style="color: grey; font-size:15px; padding: 10px; border:1px solid rgb(187, 186, 186); border-radius: 2px">
                            {{ $post->description }}
                        </p>
                    <p><i class="fa fa-toggle-on"></i>Status : 
                        @if ($post->status=='available')
                            <span style="color: rgb(1, 177, 1)">{{$post->status}}</span>
                        @else
                            <span style="color: red">{{$post->status}}</span>
                        @endif
                    </p>
                </div> 
                <a href="/post" class="btn btn-primary btn-sm">Back</a>
            </div>
        </div>
    </div>
@endsection