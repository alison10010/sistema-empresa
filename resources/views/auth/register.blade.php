@extends('auth.layout')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Registro')

@section('content') 
 
    <form action="{{route('register')}}" method="POST" autocomplete="off">
        @csrf {{-- NECESSARIO PARA REALIZAR O SALVAMENTO DO FORM NO BD --}}
        <div class="card-body">
        <div class="form-group"> 
            <label for="Nome">Nome</label>
            <input type="txt" name="name" class="form-control" id="Nome" minlength="3" placeholder="Digite o nome completo" required value="{{ old('name') }}"> {{-- VALUE 'OLD' MANTEM O VALOR DIGITADO CASO OCORRA UM ERRO --}}
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" name="email" class="form-control" id="Email" placeholder="Digite seu email" required value="{{ old('Email') }}">
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="Senha">Senha</label>
            <input type="password" name="password" class="form-control" id="Senha" placeholder="Digite sua senha" required>
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <label for="password_confirmation">Confirme a senha</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirme sua senha" required>
        </div>

        <div style="text-align: center;margin-top:20px">
            <button type="submit" class="btn btn-success">Registrar</button>
            
            <p style="margin-top: 15px;">
                <a class="text-gray-600" href="{{ route('login') }}">
                    Já possui uma conta?
                </a>
            </p>
        </div>
    </form>

@endsection  {{-- CONTEUDO DA PAGE - FIM --}}
