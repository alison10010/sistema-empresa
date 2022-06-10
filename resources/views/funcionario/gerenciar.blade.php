@extends('template.template')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Gerenciamento de funcionario') {{-- TITULO DA PAGE --}}

@section('content') {{-- CONTEUDO DA PAGE - INICIO --}}

<div class="container">
    
    {{-- LISTAGEM DE CARGO--}}

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gerenciamento de funcionario</h1>
        <p id="nome"></p>
        <a href="{{route('funcionario.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fa-solid fa-plus fa-sm text-white-70"></i> Cadastrar Funcionario</a>
    </div>

    {{-- TABELA DE GERENCIAMENTO --}}
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 33%">Nome</th>
                            <th scope="col" style="width: 20%">Setor</th>
                            <th scope="col" style="width: 20%">Cargo</th>
                            <th style="width: 24%"><center>Ações <i class="fa fa-cogs fa-1.5x fa-fw" aria-hidden="true"></i></center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($funcionarios as $funcionario)
                            <tr>                             
                                <td>{{ $funcionario->nome }}</td> {{-- NOME DO cargo --}}
                                <td>{{ $funcionario->setor->nome }}</td> {{-- NOME DO cargo --}}
                                <td>{{ $funcionario->cargo->nome }}</td> {{-- DESCRICAO DO cargo --}}
                                <td>
                                    <center>
                                    <a class="btn btn-info btn-circle" href="{{route('funcionario.edit', $funcionario->id)}}">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i></ion-icon>
                                    </a>
                                    &nbsp;
                                    <a href="#" onclick="detalhesFunc({{ $funcionario->id }});" class="btn btn-success btn-circle"> 
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    &nbsp;

                                    <a href="{{route('funcionario.deletar', $funcionario->id)}}" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    </center>
                                </td>
                            </tr>
                        @endforeach
                    </tbody> 
                </table>
            </div>
        </div>
    </div>

    {{-- Modal de Detalhes de Funcionario --}}
    <div class="modal fade" id="detalheFunc" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Informações</h5>
            </div>
            <div class="modal-body">
              Funcionario(a): <b><a id="p-nome"></b></a><br><br>
              <hr>
              Email:<b><a id="p-email" style="margin-left: 10px"></b></a>
              <br /><br />
              CPF: <b><a id="p-cpf" style="margin-left: 7px"></b></a><br><br>
              Setor:<b><a id="p-setor" style="margin-left: 10px"></b></a>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              cargo: <b><a id="p-cargo" style="margin-left: 7px"></b></a><br><br> 
            </div>
            <button class="btn btn-primary" type="button" data-dismiss="modal">Retornar</button>             
        </div>
    </div>

</div>

@endsection  {{-- CONTEUDO DA PAGE - FIM --}}