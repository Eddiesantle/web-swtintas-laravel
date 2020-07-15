@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-light" style="background-color: #48D1CC"><b>CLIENTES</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                        <a class="btn btn-primary pull-right mb-5" href="{{ route('clientes.create') }}" role="button">Cadastrar Cliente<img src="img/icone/adicionar.svg" alt="" class="ml-2" style="width: 25px"></a>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                              <thead>
                                <tr>
                                  <th>Nome</th>
                                  {{-- <th>E-mail</th>
                                  <th>Telefone</th> --}}
                                  <th>Ações</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($items as $cliente)
                                <tr>

                                  <td>{{ $cliente->name }}</td>
                                  {{-- <td>{{ $cliente->email }}</td>
                                  <td>{{ $cliente->telefone }}</td> --}}

                                  
                                  <td>
                                    <form action="{{ route('clientes.destroy', $cliente) }}" method="post">
                                      @method('DELETE')
                                      @csrf
                                      <div class="btn-group btn-group-xs" role="group" aria-label="Ações">
                                        <div class="btn-group btn-group-xs" role="group" aria-label="Ações">
                                          <a class="btn border-success" href="{{ route('clientes.show', $cliente) }}" role="button">
                                            <img src="img/icone/papel.svg" alt="" style="width: 25px">
                                            Visualizar</a>
                                        </div>
  
                                        <a class="btn border-primary" href="{{ route('clientes.edit', $cliente) }}" role="button">
                                          <img src="img/icone/painel-de-controle.svg" alt="" style="width: 25px">
                                          Editar</a>
                                        <button class="btn border-danger" type="submit"><img src="img/icone/criss-cross.svg" alt="" style="width: 25px">
                                          Deletar</button>
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
