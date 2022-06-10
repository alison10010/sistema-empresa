@extends('template.template')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Remover setor') {{-- TITULO DA PAGE --}}

@section('content') {{-- CONTEUDO DA PAGE - INICIO --}}

<div class="container">

    {{-- DELETE DE SETOR--}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h3 mb-0 text-gray-800">Remover setor: <b>{{ $setor->nome }}</b></h3>
    </div>

    <div class="form">
        <form action="{{route('setor.delete', $setor->id)}}" method="POST">
            @csrf {{-- NECESSARIO PARA REALIZAR A EDIÇÃO DO FORM NO BD --}}
            @method('PUT') {{-- NECESSARIO PARA REALIZAR A EDIÇÃO DO FORM NO BD --}}

            <div class="form-group">
                <label for="nome">Nome do setor:</label>
                <label class="txtExcluir"><b> {{$setor->nome}} </b></label>                
            </div>
            <div class="form-group">
                <label for="descricaoSetor">Descrição do Setor:</label>
                <label class="txtExcluir"><b> {{$setor->descricao}}  </b></label>              
            </div>
            <input type="hidden" name="status" value="0">
            <a type="button" class="btn btn-primary btn-md" href="{{route('setor.gerenciar')}}">Cancelar</button></a> 
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
    </div>

</div>


@endsection  {{-- CONTEUDO DA PAGE - FIM --}}