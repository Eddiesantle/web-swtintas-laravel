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

                    <form method="POST" action="{{route('clientes.store')}}">
                        @csrf
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
                            <input type="text" class="form-control" name="contact_tell">
                            <span class="error">{{$errors->first('contact_tell')}}</span>
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
