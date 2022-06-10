@extends('template.template')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Cadastro de setor') {{-- TITULO DA PAGE --}}

@section('content') {{-- CONTEUDO DA PAGE - INICIO --}}

<div class="container">

    {{-- CADASTRO DE SETOR--}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h3 mb-0 text-gray-800">Cadastro de setor</h3>
    </div>

    @include('include/msgError')  {{-- MGS DE ERROR NOS FORMULARIOS DE VALIDACAO --}}

    <div class="form">
        <form action="{{route('setor.store')}}" method="POST" autocomplete="off">
            @csrf {{-- NECESSARIO PARA REALIZAR O SALVAMENTO DO FORM NO BD --}}
            <div class="form-group">
                <label for="nome">Nome do setor:</label>
                <input type="txt" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="descricaoSetor">Descricao do Setor:</label>
                <textarea name="descricao" id="descricao" class="form-control" required></textarea>
            </div>
    
            <input type="hidden" name="status" value="1">
            <button type="submit" class="btn btn-primary">Cadastrar</button> 
        </form>
    </div>

</div>


@endsection  {{-- CONTEUDO DA PAGE - FIM --}}