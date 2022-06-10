@extends('template.template')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Remover funcionario') {{-- TITULO DA PAGE --}}

@section('content') {{-- CONTEUDO DA PAGE - INICIO --}}

<div class="container">

    {{-- CADASTRO DE SETOR--}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h3 mb-0 text-gray-800">Remover Funcionario(a): <b>{{ $funcionario->nome }}</b></h3>
    </div>

    <div class="form">
        <form action="{{route('funcionario.delete', $funcionario->id)}}" method="POST">
            @csrf {{-- NECESSARIO PARA REALIZAR A EDIÇÃO DO FORM NO BD --}}
            @method('PUT') {{-- NECESSARIO PARA REALIZAR A EDIÇÃO DO FORM NO BD --}}

            <div class="form-group">
                <label for="nome">Funcionario(a):</label>
                <label><b> {{$funcionario->nome}} </b></label>                
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <label><b> {{$funcionario->email}} </b></label>                
            </div>

            <div class="form-group">
                <label for="cpf">CPF:</label>
                <label><b> {{$funcionario->cpf}} </b></label>                
            </div>

            <div class="form-group">
                <label for="setor">Setor:</label>
                <label><b> {{$funcionario->setor->nome}} </b></label>   
                <label for="cargo" style="margin-left:30px">Cargo:</label>
                <label><b> {{$funcionario->cargo->nome}} </b></label>              
            </div>

            <input type="hidden" name="status" value="0">
            <a type="button" class="btn btn-primary btn-md" href="{{route('funcionario.gerenciar')}}">Cancelar</button></a> 
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
    </div>

</div>


@endsection  {{-- CONTEUDO DA PAGE - FIM --}}