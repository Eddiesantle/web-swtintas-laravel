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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pagina inicial</div> 
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    
                    <div class="row justify-content-center">
                      <!--<div class="col-md-2 mb-3">
                        --<img class="rounded-circle" src="storage/avatars/{{ $user->avatar }}" style="width:80px" /> 
                      </div> -->
  
                      <div class="col-md-12">
                        Seja bem vindo {{ Auth::user()->name }}!
  
                      <p>Você pode visualizar seus clientes, produtos e pedidos por aqui.</p>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="menu-items">
                <?php
                  $items = [
                      "0" => [
                        "nome" => "Cliente",
                        "img" => "https://image.flaticon.com/icons/png/512/686/686317.png",
                        "link" => "../resources/views/clientes/index.blade.php"
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

          <!--  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">  
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/banner-1.jpg" class="d-block w-100" alt="banner-1">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                      <button type="button" class="btn btn-danger">CLIENTES</button>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/banner-1.jpg" class="d-block w-100" alt="banner-2">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/banner-1.jpg" class="d-block w-100" alt="banner-3">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
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
              </div> -->
        </div>

    </div>
</div>
@endsection
