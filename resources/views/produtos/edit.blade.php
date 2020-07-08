@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="page-header">
        {{-- <a class="btn btn-primary pull-right" href="{{ route('clientes.index') }}" role="button">Voltar</a> --}}
        <h2>Visualizando Cliente</h2>

        <?php 
  /* dd($editproduto); */
        ?>
        
      </div>
            <form action="{{ route('produtos.update', $editproduto) }}" method="post">
                @csrf
                @method('PUT')
                <fieldset>
  

                  <div class="form-group @if ($errors->has('nome_produto')) has-error @endif">
                    <label class="control-label" for="nome_produto">Nome do Produto</label>
                    <input type="text" class="form-control" id="nome_produto" name="nome_produto" value="{{ old("nome_produto", $editproduto->nome_produto) }}">
                    @if ($errors->has('nome_produto'))
                    <span class="invalid-feedback help-block" role="alert">
                        <strong>{{ $errors->first('nome_produto') }}</strong>
                    </span>
                    @endif
                  </div>

                  <div class="form-group @if ($errors->has('codigo')) has-error @endif">
                    <label class="control-label" for="codigo">Codigo do Produto</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" value="{{ old("codigo", $editproduto->codigo) }}">
                    @if ($errors->has('codigo'))
                    <span class="invalid-feedback help-block" role="alert">
                        <strong>{{ $errors->first('codigo') }}</strong>
                    </span>
                    @endif
                  </div>

              
                  <br />
                  <a class="btn btn-primary pull-right" href="{{ route('produtos.index') }}" role="button">Voltar</a>
                  <button type="submit" class="btn btn-success">Alterar Cliente</button>
                </fieldset>
              </form>
    

      </div>
    </div>
  </div>
</div>

@endsection