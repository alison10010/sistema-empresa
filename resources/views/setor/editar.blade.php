@extends('template.template')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Editar setor') {{-- TITULO DA PAGE --}}

@section('content') {{-- CONTEUDO DA PAGE - INICIO --}}

<div class="container">

    {{-- EDICAO DE SETOR--}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h3 mb-0 text-gray-800">Edição do setor: <b>{{ $setor->nome }}</b></h3>
    </div>

    @include('include/msgError')  {{-- MGS DE ERROR NOS FORMULARIOS DE VALIDACAO --}}

    <div class="form">
        <form action="{{ route('setor.update', $setor->id )}}" method="POST" autocomplete="off">
            @csrf {{-- NECESSARIO PARA REALIZAR A EDIÇÃO DO FORM NO BD --}}
            @method('PUT') {{-- NECESSARIO PARA REALIZAR A EDIÇÃO DO FORM NO BD --}}

            <div class="form-group">
                <label for="nome">Nome do setor:</label>
                <input type="txt" class="form-control" id="nome" name="nome" minlength="2" value="{{$setor->nome}}" required>
            </div>
            <div class="form-group">
                <label for="descricaoSetor">Descrição do Setor:</label>
                <textarea name="descricao" id="descricao" minlength="6" class="form-control">{{$setor->descricao}}</textarea>
            </div>
            <a type="button" class="btn btn-danger btn-md" href="{{route('setor.gerenciar')}}">Cancelar</button></a> 
            <button type="submit" class="btn btn-primary">Finalizar</button>
        </form>
    </div>

</div>


@endsection  {{-- CONTEUDO DA PAGE - FIM --}}