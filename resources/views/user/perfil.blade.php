@extends('template.template')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Cadastro de cargo') {{-- TITULO DA PAGE --}}

@section('content') {{-- CONTEUDO DA PAGE - INICIO --}}

<div class="container">

    {{-- CADASTRO DE CARGO--}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h3 mb-0 text-gray-800">Informações</h3>
    </div>

    @include('include/msgError')  {{-- MGS DE ERROR NOS FORMULARIOS DE VALIDACAO --}}

    <div class="form">
        <form action="#" method="POST">
            <div class="form-group">
                <label for="nome">Usuario(a):</label>
                <label><b> {{$usuario->name}} </b></label>
            </div>
            <div class="form-group">
                <label for="nome">Email:</label>
                <label><b> {{$usuario->email}} </b></label>
            </div>
            <div class="form-group">
                <label for="nome">Usuario criado em:</label>
                <label><b> {{ $usuario->created_at->format('d/m/Y')}} às {{$usuario->created_at->format('H:i:s') }} </b></label>
            </div>
        </form>
    </div>

@endsection  {{-- CONTEUDO DA PAGE - FIM --}}
