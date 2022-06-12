@extends('auth.layout')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Login')

@section('content') 

    <form action="{{route('login')}}" method="POST" autocomplete="off">
        @csrf {{-- NECESSARIO PARA REALIZAR O SALVAMENTO DO FORM NO BD --}}
        <div class="card-body">

        <div class="form-group"> 
            <label for="Email">Email</label>
            <input type="email" name="email" class="form-control" id="Email" placeholder="Digite seu email" required value="{{ old('Email') }}">
        </div>
        <div class="form-group">
            <label for="Senha">Senha</label>
            <input type="password" name="password" class="form-control" id="Senha" minlength="6" maxlength="15" required placeholder="Digite a senha">
        </div>

        <div class="recupera-cadastra">
            <button type="submit" class="btn btn-success">Acessar</button>
        </div>
        <br />
        
        <div class="card-footer">                
            <div class="recupera-cadastra">

                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Esqueceu sua senha?') }}
                </a>
                @endif

                <a class="text-sm text-gray-600" href="{{ route('register') }}">
                    {{ __('Criar uma conta') }}
                </a>
            </div>
        </div>
    </form>

@endsection  {{-- CONTEUDO DA PAGE - FIM --}}