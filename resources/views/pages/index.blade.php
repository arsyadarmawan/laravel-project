@extends('layouts.app')    

@section('content')
    {{-- <div class="jumbotron text-center">
        <h1>Loream Ipsum Dolor</h1>  
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div> --}}
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('/img/dybala.jpg')}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Loream Ipsum</h1>
                    <p>Loream Ipsum dolor</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('/img/justdoit.jpg')}}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Loream Ipsum</h1>
                    <p>Loream Ipsum dolor</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('/img/justdoit.jpg')}}" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Loream Ipsum</h1>
                    <p>Loream Ipsum dolor</p>
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
@endsection
