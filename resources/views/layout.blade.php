<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
       

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        
                {{--  --}}


                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <a class="navbar-brand" href="#">Online Nursery</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                </button>
                              
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                  <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                      <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    @if(!empty(Auth::user())) 
                                    <li class="nav-item">
                                      <a class="nav-link" href="{{ url('customer/cart') }}">Cart</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('customer/history') }}">History</a>
                                      </li>
                                    @endif
                                    {{-- <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                      </div>
                                    </li> --}}
                                    {{-- <li class="nav-item">
                                      <a class="nav-link disabled" href="#">Disabled</a>
                                    </li> --}}
                                  </ul>
                                  <div class="form-inline my-2 my-lg-0">
                                    @if (Route::has('login'))
                                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                            @auth
                                                @if(Auth::user()->role == "admin")
                                                    <a href="{{ url('/admin') }}" class="btn btn-primary">Dashboard</a>
                                                @elseif(Auth::user()->role == "customer")
                                                <a href="{{ url('customer/profile') }}" class="btn btn-primary">Profile</a>
                                                @endif
                                                
                                                <a href="{{ url('/user_logout') }}" class="btn btn-danger">Logout</a>
                                                {{-- <form action="{{ route('logout') }}" method="post">
                                                    <a class="btn btn-danger" type="submit">Logout</a>
                                                </form> --}}
                                            @else
                                            <a href="{{ url('/login') }}" class="btn btn-primary">Login</a>

                                                @if (Route::has('register'))
                                                <a href="{{ url('/register') }}" class="btn btn-success">Register</a>
                                                @endif
                                            @endauth
                                        </div>
            @endif
                                  </div>
                                </div>
                              </nav>
                        </div>
                    </div>
                </div>

                @yield("content")

            </div>
        </div>
    </body>
</html>