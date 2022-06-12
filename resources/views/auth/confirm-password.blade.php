@extends('auth.layout')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Recuperar Senha')

@section('content') 

    <div style="padding: 10px 18px 2px;" class="text-gray-600">
        Esta é uma área segura do sistema. Por favor, confirme sua senha antes de continuar.
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <div class="card-body">
        <!-- Password -->

        <div class="form-group"> 
            <label for="password">Senha</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Digite sua senha" required autofocus>
        </div>

        <div class="card-footer">                
            <div class="recupera-cadastra">
                <button type="submit" class="btn btn-success">Prosseguir</button>
            </div>
        </div>
    </form>

@endsection  {{-- CONTEUDO DA PAGE - FIM --}}