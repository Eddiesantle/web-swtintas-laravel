@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 mt-5">
      <div class="card">
        <div class="card-header text-light" style="background-color: #48D1CC"><b>VER CLIENTES</b></div>


          <div class="col-md-4 mt-3">
            <a class="btn btn-primary pull-right" href="{{ route('clientes.index') }}" role="button">Voltar</a>
          </div>

        
        <div class="table-responsive mt-3">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
              </tr>
            </thead>
            <tbody>
      
      
      
              <tr>
                <td>{{ $vercliente->name }}</td>
                <td>{{ $vercliente->email }}</td>
                <td>{{ $vercliente->telefone }}</td>
              </tr>
      
              {{-- <p><strong>Nome do Aluno:</strong> {{ $vercliente->name }}</p>
              <p><strong>E-mail do Aluno:</strong> <a href="mailto:{{ $vercliente->email }}">{{ $vercliente->email }}</a></p>
              <p><strong>Telefone:</strong> {{ $vercliente->telefone }}</p> --}}
      
            </tbody>
          </table>
        </div>


       

        </div>
    </div>

    </div>
  </div>
</div>

@endsection