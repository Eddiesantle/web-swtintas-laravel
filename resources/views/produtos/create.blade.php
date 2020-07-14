@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <div class="card">
                <div class="card-header text-light" style="background-color: #48D1CC"><b>CADASTRAR PRODUTO</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    

                    <form method="POST" action="{{route('produtos.store')}}" enctype="multipart/form-data">
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

                        <div class="form-group @if ($errors->has('avatar')) has-error @endif">
                            <label class="control-label" for="avatar">Foto do Produto</label>
                            <input type="file" class="form-control" id="avatar" name="avatar">
                            @if ($errors->has('avatar'))
                            <span class="invalid-feedback help-block" role="alert">
                                <strong>{{ $errors->first('avatar') }}</strong>
                            </span>
                            @endif
                        </div>

                          <a class="btn btn-primary pull-right" href="{{ route('produtos.index') }}" role="button">Voltar</a>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
