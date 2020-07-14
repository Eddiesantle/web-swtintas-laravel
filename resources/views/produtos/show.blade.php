@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="page-header">
        {{-- <a class="btn btn-primary pull-right" href="{{ route('clientes.index') }}" role="button">Voltar</a> --}}
        <h2>Visualizando Curso</h2>
        <a class="btn btn-primary pull-right" href="{{ route('produtos.index') }}" role="button">Voltar</a>
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Produto</th>
              <th>Codigo</th>
            </tr>
          </thead>
          <tbody>
    
    
    
            <tr>
              <td>{{ $verproduto->nome_produto }}</td>
              <td>{{ $verproduto->codigo }}</td>
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

@endsection