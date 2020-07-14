@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrar Produtos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Seja bem vindo {{ Auth::user()->name }}!

                    <p>Aqui vamos registrar todos os produtos</p>

                    <a class="btn btn-primary pull-right mb-5" href="{{ route('produtos.create') }}" role="button">Cadastrar produto</a>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>Produto</th>
                              <th>Codigo</th>
                              <th>Ações</th>

                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($items as $produto)
                            <tr>

                              <td>{{ $produto->nome_produto }}</td>
                              <td>{{ $produto->codigo }}</td>
                              <td>
                                <form action="{{ route('produtos.destroy', $produto) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <div class="btn-group btn-group-xs" role="group" aria-label="Ações">
                                      <div class="btn-group btn-group-xs" role="group" aria-label="Ações">
                                        <a class="btn btn-success" href="{{ route('produtos.show', $produto) }}" role="button">Visualizar</a>
                                      </div>

                                      <a class="btn btn-primary" href="{{ route('produtos.edit', $produto) }}" role="button">Editar</a>
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
