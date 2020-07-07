@extends('layouts.app')

@section('content')
<div class="page-header">
  {{-- <a class="btn btn-primary pull-right" href="{{ route('clientes.index') }}" role="button">Voltar</a> --}}
  <h2>Visualizando Curso</h2>
</div>

<div class="table-responsive">
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($items as $cliente)
      <tr>
        <td>{{ $cliente->name }}</td>
        <td>{{ $cliente->email }}</td>
        <td>{{ $cliente->telefone }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection