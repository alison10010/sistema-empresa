@extends('template.template')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Remover cargo') {{-- TITULO DA PAGE --}}

@section('content') {{-- CONTEUDO DA PAGE - INICIO --}}

<div class="container">

    {{-- REMOCAO DE CARGO--}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h3 mb-0 text-gray-800">Remover cargo: <b>{{ $cargo->nome }}</b></h3>
    </div>

    <div class="form">
        <form action="{{route('cargo.delete', $cargo->id)}}" method="POST">
            @csrf {{-- NECESSARIO PARA REALIZAR A EDIÇÃO DO FORM NO BD --}}
            @method('PATCH') {{-- NECESSARIO PARA REALIZAR A EDIÇÃO DO FORM NO BD --}}

            <div class="form-group">
                <label for="nome">Nome do cargo:</label>
                <label class="txtExcluir"><b> {{$cargo->nome}} </b></label>                
            </div>
            <div class="form-group">
                <label for="nome">Setor pertencente:</label>
                <label class="txtExcluir"><b> {{$cargo->setor->nome}} </b></label>                
            </div>
            <div class="form-group">
                <label for="descricaoSetor">Descrição do Cargo:</label>
                <label class="txtExcluir"><b> {{$cargo->descricao}}  </b></label>           
            </div>
            <input type="hidden" name="status" value="0">
            <a type="button" class="btn btn-primary btn-md" href="{{ route('cargo.gerenciar') }}">Cancelar</button></a> 
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
    </div>

</div>


@endsection  {{-- CONTEUDO DA PAGE - FIM --}}