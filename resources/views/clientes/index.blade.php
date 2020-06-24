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
                    

                        <a class="btn btn-primary pull-right" href="{{ route('clientes.create') }}" role="button">Cadastrar Cliente</a>

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


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
