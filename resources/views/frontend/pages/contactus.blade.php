@extends('frontend.app')
<style>

</style>
@section('content')
    <div class="container">
        
        <div class="contact m-5 p-5" style="">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="mb-5" ><span style="border-bottom: 1px solid black;">Contact us</span></h5>
                    <form action="/contact-us/send" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter your phone" aria-describedby="helpId">
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" aria-describedby="helpId">
                          </div>
                          <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="3" placeholder="Enter your message"></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection