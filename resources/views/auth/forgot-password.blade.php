@extends('auth.layout')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Recuperar Senha')

@section('content') 

    <div style="padding: 10px 18px 2px;" class="text-gray-600">
        Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail e nós lhe enviaremos um link de redefinição de senha que permitirá que você escolha uma nova.
    </div>

    <form action="{{ route('password.email') }}" method="POST" autocomplete="off">
        @csrf {{-- NECESSARIO PARA REALIZAR O SALVAMENTO DO FORM NO BD --}}
        <div class="card-body">

        <div class="form-group"> 
            <label for="Email">Email</label>
            <input type="email" name="email" class="form-control" id="Email" placeholder="Digite seu email" required value="{{ old('Email') }}" autofocus>
        </div>
            
        <div class="card-footer">
            <div class="recupera-cadastra">
                <button type="submit" class="btn btn-success">Enviar Link de redefinição de senha</button>
            </div>
        </div>

    </form>

@endsection  {{-- CONTEUDO DA PAGE - FIM --}}