<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'OFICINA DA COR') }}</title>

    <link rel="icon" href="img/pintura.png" type="image/x-icon"/>

{{--     <!-- Scripts -->
    <!--script src="{{ asset('js/app.js') }}" defer></--script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/styles.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqBootstrapValidation/1.3.6/jqBootstrapValidation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

    





</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light text-light shadow-sm" style="background-color: #48D1CC">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="img/logofc.jpeg" width="200" class="d-inline-block align-top border border-primary rounded" alt="">

                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                @if(Auth::check())
                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="font-size: 20px">
                          <li class="nav-item">
                            <a class="nav-link text-light font-weight-bold" href="{{ url('/') }}">HOME</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-light font-weight-bold" href="{{ route('produtos.index')}}">PRODUTOS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-light font-weight-bold" href="{{ route('clientes.index')}}">CLIENTES</a>
                          </li>
                          

                    </ul>
                @endif

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item ">
                                <a class="nav-link text-light font-weight-bold" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light font-weight-bold" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link text-light font-weight-bold dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color: #48D1CC">

                                    
                                    <a class="dropdown-item text-light font-weight-bold" href="{{ route('profile')}}">
                                        Perfil do Usuário
                                    </a>

                                    <a class="dropdown-item text-light font-weight-bold" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>

                

                {{-- @endif --}}

            </div>
        </nav>

        

        {{-- Info Alert --}}
      @if(session('status'))
      <div class="top-alert alert alert-info alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          {{session('status')}}
      </div>
      @endif

      {{-- Success Alert --}}
      @if(session('success'))
      <div class="top-alert alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          {{session('success')}}
      </div>
      @endif

      {{-- Error Alert --}}
      @if(session('error'))
      <div class="top-alert alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          {{session('error')}}
      </div>
      @endif

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>



    <style>
        .error {
            color: red;
            font-size: 12px;
            }
    </style>

</html>
