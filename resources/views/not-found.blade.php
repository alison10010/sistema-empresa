@extends('auth.layout')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Pagina não encontrada')

@section('content')

<style>
    body{
        background-color: #1a202c !important;
      /*  background-color: rgba(26,32,44,var(--bg-opacity)); */
    }
</style>

<form method="POST" autocomplete="off"> 
    <div class="card-body" style="">
        <!-- 404 Error Text -->
        <div class="text-center">
            <div class="error mx-auto" data-text="404">404</div>
            <p class="lead text-gray-900 mb-5"><b>Verifique se a URL está correta</b></p>
            <p class="text-gray-900 mb-0">Parece que você encontrou uma falha na matriz...</p>
            <a href="/">&larr; Volte</a>
        </div>
    
    </div>
</form>

@endsection  {{-- CONTEUDO DA PAGE - FIM --}}

        

