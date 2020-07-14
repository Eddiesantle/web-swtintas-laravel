@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    
                    <div class="row justify-content-center">
                      <div class="col-md-2 mb-3">
                        <img class="rounded-circle" src="storage/avatars/{{ $user->avatar }}" style="width:80px;" />
                      </div>
  
                      <div class="col-md-4">
                        <h3>Seja bem vindo {{ Auth::user()->name }}!</h3>
  
                      <p>Em breve, sistema de gestão para sua loja de tintas.</p>
                      </div>
                    </div>


      


                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/banner-1.jpg" class="d-block w-100" alt="banner-1">


                  </div>
                  <div class="carousel-item">
                    <img src="img/banner-2.jpg" class="d-block w-100" alt="banner-2">
                    

                  </div>
                  <div class="carousel-item">
                    <img src="img/banner-3.jpg" class="d-block w-100" alt="banner-3">
                    

                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>

    </div>
</div>
@endsection
