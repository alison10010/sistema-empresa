@extends('template.template')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Editar funcionario') {{-- TITULO DA PAGE --}}

@section('content') {{-- CONTEUDO DA PAGE - INICIO --}}

<div class="container">

    {{-- EDICAO DE SETOR--}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h3 mb-0 text-gray-800">Edição do funcionario: <b>{{ $funcionario->nome }}</b></h3>
    </div>

    @include('include/msgError')  {{-- MGS DE ERROR NOS FORMULARIOS DE VALIDACAO --}}

    <div class="form">
        <form action="{{route('funcionario.update',$funcionario->id)}}" method="POST" autocomplete="off">
            @csrf {{-- NECESSARIO PARA REALIZAR A EDIÇÃO DO FORM NO BD --}}
            @method('PUT') {{-- NECESSARIO PARA REALIZAR A EDIÇÃO DO FORM NO BD --}}

            <div class="form-group">
                <label for="nome">Nome do setor:</label>
                <input type="txt" class="form-control" id="nome" name="nome" value="{{$funcionario->nome}}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$funcionario->email}}" required>
            </div>            
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="{{$funcionario->cpf}}" required>
            </div> 
            <div class="form-group">
                <label for="setor">Setor Pertencente:</label>
                <select name="setor_id" class="form-control" id="setor" onchange="cargos()" required>
                    <option value="{{$funcionario->setor_id}}">{{$funcionario->setor->nome}}</option> 
                    @foreach ($setors as $setor)
                        <option value="{{ $setor->id }}">{{ $setor->nome }}</option>
                    @endforeach
                </select> 
            </div>
            <!-- O CARGO VEM VIA SCRIPT SE ACORDO COM O SETOR SELECIONADO (FIM DA PAGE) -->
            <div class="form-group">
                <label for="cargo">Função:</label>
                <select id="cargo" name="cargo_id" class="form-control" required>
                  <option value="{{ $funcionario->cargo_id }}">{{$funcionario->cargo->nome}}</option>
              </select>
          </div>
            <a type="button" class="btn btn-danger btn-md" href="{{route('funcionario.gerenciar')}}">Cancelar</button></a> 
            <button type="submit" class="btn btn-primary">Finalizar</button>
        </form>
    </div>

</div>


@endsection  {{-- CONTEUDO DA PAGE - FIM --}}