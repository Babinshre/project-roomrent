<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RoomRent</title>
    {{-- boostrap css --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    {{-- js bootstrap --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    {{-- google fonts - Roboto --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400&display=swap" rel="stylesheet">
    {{-- custom css stylesheet --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">      
    <style>
      .topPage{
        text-align: center;
        position: fixed;
        right: 50px;
        bottom: 5%;
        padding: 5px 3px;
        background: rgb(255, 199, 17);
        z-index: 1;
        border-radius: 10px;
        margin: 0;
      }  
      .bor{
        border: 1px solid red;
      }
    </style>  
</head>
<body>
    <div class="roomrent-body">
      <div class="topPage">
        <a href="#"><i class="fas fa-arrow-circle-up"><span style="display: block">Top</span></i></a>
      </div>
        {{-- topnavbar --}}
        <div class="top-navbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 logo">
                        <a href="/"><img src="{{asset('images/logoRR.png')}}" height="60px" alt=""></a>
                    </div>
                    <div class="col-md-4 right-menu">
                        <div class="row">
                            <div class="col">   
                                <a href="tel:9860175748"><i class="fas fa-phone-square-alt"></i> callus: 9860175748</a>
                            </div>
                            @if ( Auth::user() )
                              <div class="col">
                                <div class="dropdown">
                                  <a id="Dropdown" class="dropdown-toggle" href="#" role="button" 
                                  style="font-size: "
                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user-alt"></i>  
                                    {{ Auth::user()->name }}
                                  </a>
                    
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Dropdown">
                                        <ul class="li">
                                              <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                              {{ __('Logout') }}
                                          </a>
                        
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                              @csrf
                                          </form>
                                        </ul>
                                        <ul class="li">
                                          <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                                        </ul>
                                  </div>
                              </div>
                            
                            @else
                            <div class="col">
                              <a href="/login"><i class="fas fa-user-alt"></i> Login/Register</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-lignt">
            <div class="container">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="navbar-collapse collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link" aria-current="page" href="/">Home</a>
                  <a class="nav-link" href="/aboutus">About us</a>
                  <a class="nav-link" href="/gallary">Gallary</a>
                  <a class="nav-link" href="/contactus">Contact us</a>
                  <a class="nav-link" href="/#posts">New post<span style="color: rgb(255, 251, 0); font-weight: bold"> *</span></a>
                </div>
              </div>
            </div>
        </nav>
        {{-- content --}}
        @yield('content')
        {{-- carousel --}}
        @yield('carousel')
        {{-- searchbar --}}
        @yield('searchbar')
        {{-- available post --}}
        @yield('availablePost')
        {{-- footer --}}
        <div class="footer">
          <div class="upperfooter">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <h5>Roomrent</h5>
                  <ul class="">
                    <li>
                      <a href="#"><i class="fas fa-angle-right"></i> About us</a>
                    </li>
                    <li>
                      <a href="mailto:babinshrestha5748@gmail.com"><i class="fas fa-angle-right"></i> Send us a message</a>
                    </li>
                    <li>
                      <a href="#"><i class="fas fa-angle-right"></i> FAQ</a>
                    </li>
                    <li>
                      <a href="#"><i class="fas fa-angle-right"></i> Privacy & policy</a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <h5>Contact us</h5>
                  <ul class="">
                    <li>
                      <a href="#"><i class="fas fa-map-marker-alt"></i> About us</a>
                    </li>
                    <li>
                      <a href="#"><i class="fas fa-phone-square-alt"></i> Send us a message</a>
                    </li>
                    <li>
                      <a href="#"><i class="fas fa-envelope"></i>  FAQ</a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <h5>Find us</h5>
                  <ul class="">
                    <li>
                      <a href="#"><i class="fas fa-link"></i> www.facebook.com/roomrent</a>
                    </li>
                    <li>
                      <a href="#"><i class="fas fa-link"></i> www.instagram.com/@roomrent</a>
                    </li>
                    <li>
                      <a href="#"><i class="fas fa-link"></i>  www.twitter.com/@roomrent</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="lowerfooter">
            <div class="container">
              <div class="row">
                <div class="col">
                  <p>Copyright © 2021 - roomrent.com - All right reserved.</p>
                </div>
                <div class="col">
                  <p>Powered by - BNBSD</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</body>

</html>