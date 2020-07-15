@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-light" style="background-color: #48D1CC"><b>PRODUTOS</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <a class="btn btn-primary pull-right mb-5" href="{{ route('produtos.create') }}" role="button">Cadastrar Produto<img src="img/icone/adicionar.svg" alt="" class="ml-2" style="width: 25px"></a>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>Produto</th>
                              {{-- <th>Codigo</th> --}}
                              <th>Ações</th>

                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($items as $produto)
                            <tr>

                              <td>{{ $produto->nome_produto }}</td>
                              {{-- <td>{{ $produto->codigo }}</td> --}}
                              <td>
                                <form action="{{ route('produtos.destroy', $produto) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <div class="btn-group btn-group-xs" role="group" aria-label="Ações">
                                      <div class="btn-group btn-group-xs" role="group" aria-label="Ações">
                                        <a class="btn border-success" href="{{ route('produtos.show', $produto) }}" role="button"><img src="img/icone/papel.svg" alt="" style="width: 25px">Visualizar</a>
                                      </div>

                                      <a class="btn border-primary" href="{{ route('produtos.edit', $produto) }}" role="button"><img src="img/icone/painel-de-controle.svg" alt="" style="width: 25px">Editar</a>
                                      <button class="btn border-danger" type="submit"><img src="img/icone/criss-cross.svg" alt="" style="width: 25px">Deletar</button>
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
