@extends('template.template')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Cadastro de funcionario') {{-- TITULO DA PAGE --}}

@section('content') {{-- CONTEUDO DA PAGE - INICIO --}}

<div class="container">

    {{-- CADASTRO DE FUNCIONARIO--}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h3 mb-0 text-gray-800">Cadastro de funcionario</h3>
    </div>

    @include('include/msgError')  {{-- MGS DE ERROR NOS FORMULARIOS DE VALIDACAO --}}

    <div class="form">
        <form action="{{route('funcionario.store')}}" method="POST" autocomplete="off">
            @csrf {{-- NECESSARIO PARA REALIZAR O SALVAMENTO DO FORM NO BD --}}
            <div class="form-group">
                <label for="nome">Nome do Funcionario:</label>
                <input type="txt" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
            </div> 
    
            <div class="form-group">
                <label for="setor">Setor Pertencente:</label>
                <select name="setor_id" class="form-control" id="setor" onchange="cargos()" required>
                    <option value="">Selecione...</option> 
                    @foreach ($setors as $setor)
                        <option value="{{ $setor->id }}">{{ $setor->nome }}</option>
                    @endforeach
                </select> 
            </div>
            <!-- O CARGO VEM VIA SCRIPT SE ACORDO COM O SETOR SELECIONADO (FIM DA PAGE) -->
            <div class="form-group">
                  <label for="cargo">Função:</label>
                  <select id="cargo" name="cargo_id" class="form-control" required>
                    <option value="">Selecione...</option>
                </select>
            </div>
    
            <input type="hidden" name="status" value="1">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

</div>

@endsection  {{-- CONTEUDO DA PAGE - FIM --}}