@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="page-header">
        {{-- <a class="btn btn-primary pull-right" href="{{ route('clientes.index') }}" role="button">Voltar</a> --}}
        <h2>Visualizando Cliente</h2>
        
      </div>
            <form action="{{ route('clientes.update', $editcliente) }}" method="post">
                @csrf
                @method('PUT')
                <fieldset>
  

                  <div class="form-group @if ($errors->has('name')) has-error @endif">
                    <label class="control-label" for="name">Nome do cliente</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old("name", $editcliente->name) }}">
                    @if ($errors->has('name'))
                    <span class="invalid-feedback help-block" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group @if ($errors->has('email')) has-error @endif">
                    <label class="control-label" for="email">E-mail do Aluno</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old("email", $editcliente->email) }}">
                    @if ($errors->has('email'))
                    <span class="invalid-feedback help-block" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group @if ($errors->has('telefone')) has-error @endif">
                    <label class="control-label" for="telefone">Telefone do Cliente</label>
                    <input type="telefone" class="form-control" id="telefone" name="telefone" value="{{ old("telefone", $editcliente->telefone) }}">
                    @if ($errors->has('telefone'))
                    <span class="invalid-feedback help-block" role="alert">
                        <strong>{{ $errors->first('telefone') }}</strong>
                    </span>
                    @endif
                  </div>
              
                  <br />
                  <a class="btn btn-primary pull-right" href="{{ route('clientes.index') }}" role="button">Voltar</a>
                  <button type="submit" class="btn btn-success">Alterar Cliente</button>
                </fieldset>
              </form>
    

      </div>
    </div>
  </div>
</div>

@endsection