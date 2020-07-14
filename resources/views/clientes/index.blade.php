@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clientes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Seja bem vindo {{ Auth::user()->name }}!

                    <p>Aqui vamos registrar todos os clientes</p>
                    

                        <a class="btn btn-primary pull-right mb-5" href="{{ route('clientes.create') }}" role="button">Cadastrar Cliente</a>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                              <thead>
                                <tr>
                                  <th>Nome</th>
                                  <th>E-mail</th>
                                  <th>Telefone</th>
                                  <th>Ações</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($items as $cliente)
                                <tr>

                                  <td>{{ $cliente->name }}</td>
                                  <td>{{ $cliente->email }}</td>
                                  <td>{{ $cliente->telefone }}</td>

                                  
                                  <td>
                                    <form action="{{ route('clientes.destroy', $cliente) }}" method="post">
                                      @method('DELETE')
                                      @csrf
                                      <div class="btn-group btn-group-xs" role="group" aria-label="Ações">
                                        <div class="btn-group btn-group-xs" role="group" aria-label="Ações">
                                          <a class="btn btn-success" href="{{ route('clientes.show', $cliente) }}" role="button">Visualizar</a>
                                        </div>
  
                                        <a class="btn btn-primary" href="{{ route('clientes.edit', $cliente) }}" role="button">Editar</a>
                                        <button class="btn btn-danger" type="submit">Deletar</button>
                                      </div>
                                    </form>
                                  </td>

                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
