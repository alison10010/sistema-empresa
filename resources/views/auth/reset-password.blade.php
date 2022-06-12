@extends('auth.layout')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Recuperar Senha')

@section('content') 

    <form action="{{ route('password.update') }}" method="POST" autocomplete="off">
        @csrf {{-- NECESSARIO PARA REALIZAR O SALVAMENTO DO FORM NO BD --}}
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="card-body">

        <div class="form-group"> 
            <label for="Email">Email</label>
            <input type="email" name="email" class="form-control" id="Email" placeholder="Digite seu email" required value="{{ old('email', $request->email) }}" autofocus>
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
            
        <div class="card-footer">                
            <div class="recupera-cadastra">
                <button type="submit" class="btn btn-success">Resetar senha</button>
            </div>
        </div>
        
    </form>


@endsection  {{-- CONTEUDO DA PAGE - FIM --}}
