@extends('auth.layout')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Recuperar Senha')

@section('content') 

    <div style="padding: 10px 18px 2px;" class="text-gray-600">
        {{ __('Antes de começar, você poderia verificar seu endereço de e-mail clicando no link que acabamos de enviar para você? Se você não recebeu o e-mail, teremos o prazer de lhe enviar outro.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Um novo link de verificação foi enviado para o endereço de e-mail fornecido durante o registro.') }}
        </div>
    @endif
    <br />
    <div class="controls form-inline recupera-cadastra">
        <form action="{{ route('verification.send') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Reenviar email de confirmação</button>
        </form> 
    
        <form method="POST" style="display: inline-block" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Deslogar</button>
        </form>
        <br /> <br /> 
    </div>
    <br />
    

@endsection  {{-- CONTEUDO DA PAGE - FIM --}}
