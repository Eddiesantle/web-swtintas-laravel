@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <div class="card">
                <div class="card-header text-light" style="background-color: #48D1CC"><b>CADASTRAR CLIENTES</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    

                    <form method="POST" action="{{route('clientes.store')}}">
                        @csrf

                        {{-- <div class="form-group @if ($errors->has('curso_id')) has-error @endif">
                            <label class="control-label" for="curso_id">Produtos</label>
                            <select class="form-control" id="curso_id" name="curso_id">
                              @foreach ($produtos as $id => $produto)
                              <option value="{{ $id }}">{{ $produto }}</option>
                              @endforeach
                            </select>
                            @if ($errors->has('curso_id'))
                            <span class="invalid-feedback help-block" role="alert">
                                <strong>{{ $errors->first('curso_id') }}</strong>
                            </span>
                            @endif
                          </div> --}}


                        <div class="form-group">
                            <label>Nome Cliente</label>
                            <input type="text" class="form-control" name="contact_name">
                            <span class="error">{{$errors->first('contact_name')}}</span>
                          </div>
                        <div class="form-group">
                          <label>Email address</label>
                          <input type="email" class="form-control" name="contact_email">
                          <span class="error">{{$errors->first('contact_email')}}</span>
                        </div>
                        <div class="form-group">
                            <label>Numero de telefone</label>
                            <input type="text" class="form-control" name="contact_tell" id="contact_tell">
                            <span class="error">{{$errors->first('contact_tell')}}</span>
                          </div>
                          <a class="btn btn-primary pull-right" href="{{ route('clientes.index') }}" role="button">Voltar</a>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>


<script>


    $(document).ready(function(){
        
        // Mascara input
        $('#contact_tell').on('focus',function(){
            $(this).mask("(99) 9999-9999?9");
            $(this).on('Keyup',function(){
                var tamanho=$(this).val();
                var numStr=tamanho.replace(/[^0-9]/g, '');
                var numSrt2=numStr.length;
    
                if(numSrt2 == 11){
                    $(this).mask("(99) 99999-9999?9");
                }else if (numStr2 == 10) {
                    $(this).mask("(99) 9999-999?9");
                }
            });
        });
        

    });
    </script>






@endsection
