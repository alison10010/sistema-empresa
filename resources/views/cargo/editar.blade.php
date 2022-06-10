@extends('template.template')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Editar cargo') {{-- TITULO DA PAGE --}}

@section('content') {{-- CONTEUDO DA PAGE - INICIO --}}

<div class="container">

    {{-- EDICAO DE CARGO--}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h3 mb-0 text-gray-800">Edição do cargo: <b>{{ $cargo->nome }}</b></h3>
    </div>

    @include('include/msgError')  {{-- MGS DE ERROR NOS FORMULARIOS DE VALIDACAO --}}

    <div class="form">
        <form action="{{route('cargo.update', $cargo->id)}}" method="POST" autocomplete="off">
            @csrf {{-- NECESSARIO PARA REALIZAR A EDIÇÃO DO FORM NO BD --}}
            @method('PUT') {{-- NECESSARIO PARA REALIZAR A EDIÇÃO DO FORM NO BD --}}

            <div class="form-group">
                <label for="nome">Nome do cargo:</label>
                <input type="txt" class="form-control" id="nome" name="nome" value="{{$cargo->nome}}" required>
            </div>
            <div class="form-group">
                <label for="setor">Setor Pertencente:</label>                
                <select name="setor_id" class="form-control" required> 
                    <option value="{{ $cargo->setor_id }}"> {{ $cargo->setor->nome }} </option>
                    @foreach ($setors as $setor)
                        <option value="{{ $setor->id }}">{{ $setor->nome }}</option>
                    @endforeach                 
              </select> 
            </div>
            <div class="form-group">
                <label for="descricaoSetor">Descrição do Cargo:</label>
                <textarea name="descricao" id="descricao" class="form-control">{{$cargo->descricao}}</textarea>
            </div>
            <a type="button" class="btn btn-danger btn-md" href="{{ route('cargo.gerenciar') }}">Cancelar</button></a> 
            <button type="submit" class="btn btn-primary">Finalizar</button>
        </form>
    </div>

</div>


@endsection  {{-- CONTEUDO DA PAGE - FIM --}}