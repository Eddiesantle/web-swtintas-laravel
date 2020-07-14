@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 mt-5">
      <div class="card">
        <div class="card-header text-light" style="background-color: #48D1CC">

<b>VER PRODUTO</b>
          
        </div>

        <div class="card-body">
          <div class="col-md-4 mt-3">
            <a class="btn btn-primary pull-right" href="{{ route('produtos.index') }}" role="button">Voltar</a>
          </div>
          
          <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Produto</th>
                  <th>Codigo</th>
                  <th>Foto do Produto</th>
                </tr>
              </thead>
              <tbody>



                <tr>
                  <td>{{ $verproduto->nome_produto }}</td>
                  <td>{{ $verproduto->codigo }}</td>
                  {{-- <td><img class="rounded-circle" src="storage/{{ $verproduto->avatar }}" style="width:100px;" /></td> --}}
                  <td><img src="{{ asset("storage/{$verproduto->avatar}") }}" style="width: 100px" alt=""></td>
                  {{-- <td><img src="{{ asset("storage/produtos/_avatar1594691545.JPG") }}" style="width: 100px" alt=""></td> --}}
                </tr>



              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection