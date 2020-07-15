@extends('layouts.app')

@section('content')

<style>
.inicial{
 background-color: #FEB;
 border-radius: 550px;
}
.img-icon-img{
width: auto;
height: 100px;

}
.menu-items{
  display: flex ;
  flex-wrap: wrap;
  justify-content: space-around;
  padding-top: 40px;
}
.item-box{
  display: flex;
  justify-content: center;
  text-align: center;
  flex-direction: column;
}
.img-titulo {
  margin-top: 10px;
  
}
.img-titulo-ancora{
  color: #000 ;
}
 </style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pagina inicial</div> 
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    
                    <div class="row justify-content-center">
                      <div class="col-md-2 mb-3">
                        <img class="rounded-circle" src="storage/avatars/{{ $user->avatar }}" style="width:80px" /> 
                      </div> 
  
                      <div class="col-md-4">
                        <h3>Seja bem vindo {{ Auth::user()->name }}!</h3>
  
                      <p>Em breve, sistema de gestão para sua loja de tintas.</p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--         <div class="col-md-12 mt-3 mb-3">
            <div class="menu-items">
                <?php
                  $items = [
                      "0" => [
                        "nome" => "Cliente",
                        "img" => "https://image.flaticon.com/icons/png/512/686/686317.png",
                        "link" => "{{ route('produtos.index')}}"
                      ],
                      "1" => [
                        "nome" => "Produtos",
                        "img" => "https://image.flaticon.com/icons/svg/1170/1170679.svg",
                        "link" => "../resources/views/produtos/index.blade.php"
                      ],
                      "2" => [
                        "nome" => "Pedidos",
                        "img" => "https://image.flaticon.com/icons/png/512/126/126510.png",
                        "link" => "../resources/views/home/index.blade.php"
                      ]

                  ];

                  foreach ($items as $item) {
                    echo "<div class='item-box col-md-3'>";
                      echo "<div class='img-icon '>";
                        echo "<a href='".$item['link']."'>";
                          echo "<img class='img-icon-img'   src='".$item['img']."'/>";
                        echo "</a>";
                      echo "</div>";
                      echo "<div class='img-titulo'>";
                        echo "<a class='img-titulo-ancora' href='".$item['link']."'>".$item['nome']."</a>";
                      echo "</div>";
                    echo "</div>";
                  };

                ?>

            </div>
          </div> --}}

          <div class="row mt-5 justify-content-center">
              <div class='item-box col-md-3 mt-5'>
                <h3>Clientes</h3>
                <div class='img-icon '>
                  <a href="{{ route('clientes.index')}}">
                    <img src="https://image.flaticon.com/icons/png/512/686/686317.png" style="width: 80px" alt="">
                  </a>
                </div>
              </div>
              <div class='item-box col-md-3 mt-5'>
                <div class='img-icon '>
                  <h3>Produtos</h3>
                  <a href="{{ route('produtos.index')}}">

                    <img src="https://image.flaticon.com/icons/svg/1170/1170679.svg" style="width: 80px" alt="">
                  </a>
                </div>
              </div>
              <div class='item-box col-md-3 mt-5'>
                <h3>Pedidos</h3>
                <div class='img-icon '>
                  <a href="{{ route('clientes.index')}}">
                    <img src="https://image.flaticon.com/icons/png/512/126/126510.png" style="width: 80px" alt="">
                  </a>
                </div>
              </div>
          </div>

        <div class="row justify-content-center">
          <div class="col-md-8 mt-5">
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
