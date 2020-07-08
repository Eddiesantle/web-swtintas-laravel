@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Produtos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Seja bem vindo {{ Auth::user()->name }}!

                    <p>Aqui vamos registrar todos os Produtos</p>

                    

                    <form method="POST" action="{{route('produtos.store')}}">
                        @csrf
                        <div class="form-group">
                            <label>Nome Produto</label>
                            <input type="text" class="form-control" name="nome_produto">
                            <span class="error">{{$errors->first('nome_produto')}}</span>
                          </div>
                        <div class="form-group">
                          <label>Codigo</label>
                          <input type="text" class="form-control" name="codigo">
                          <span class="error">{{$errors->first('codigo')}}</span>
                        </div>

                          <a class="btn btn-primary pull-right" href="{{ route('produtos.index') }}" role="button">Voltar</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
