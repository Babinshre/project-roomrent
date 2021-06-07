@extends('backend.app')
@section('content')
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>sn</th>
                    <th>Location</th>
                    <th>Type</th>
                    <th>For</th>
                    <th>Price</th>
                    <th>Picture</th>
                    <th>Status</th>
                    <th>Perform</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td scope="row">{{ $post->id }}</td>
                    <td>{{ $post->location }}</td>
                    <td>{{ $post->type }}</td>
                    <td>{{ $post->for }}</td>
                    <td>{{ $post->price }}</td>
                    <td><img class="" src="{{ $post->image_feature }}" alt="Card image cap" style="height: 100px" width="150px"></td>
                    <td>{{ $post->status }}</td>
                    <td>
                        <div class="row">
                            <div class="col-md-3">
                                <a href="post/{{$post->id}}" class="btn btn-primary btn-sm">show</a>
                            </div>
                            <div class="col-md-3">
                                <a href="post/{{$post->id}}/edit" class="btn btn-warning btn-sm">edit</a>
                            </div>
                            <div class="col-md-3">
                                <form action="post/{{ $post->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection