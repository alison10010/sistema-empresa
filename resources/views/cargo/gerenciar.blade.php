@extends('template.template')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Gerenciamento de cargo') {{-- TITULO DA PAGE --}}

@section('content') {{-- CONTEUDO DA PAGE - INICIO --}}

<div class="container">
    
    {{-- LISTAGEM DE CARGO--}}

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gerenciamento de cargo</h1>
        <a href="{{ route('cargo.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fa-solid fa-plus fa-sm text-white-70"></i> Cadastrar Cargo</a>
    </div>

    <!-- DataTales -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 23%">Cargo</th>
                            <th scope="col" style="width: 10%">Setor</th>
                            <th scope="col">Descrição</th>
                            <th style="width: 15%"><center>Ações <i class="fa fa-cogs fa-1.5x fa-fw" aria-hidden="true"></i></center></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($cargos as $cargo)
                            <tr>                             
                                <td>{{ $cargo->nome }}</td> {{-- NOME DO cargo --}}
                                <td>{{ $cargo->setor->nome }}</td> {{-- NOME DO cargo --}}
                                <td>{{ $cargo->descricao }}</td> {{-- DESCRICAO DO cargo --}}
                                <td>
                                    <center>
                                    <a class="btn btn-info btn-circle" href="{{route('cargo.edit', $cargo->id)}}">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i></ion-icon>
                                    </a>
                                    &nbsp;
                                    <a href="{{route('cargo.deletar', $cargo->id)}}" class="btn btn-danger btn-circle">
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

</div>


@endsection  {{-- CONTEUDO DA PAGE - FIM --}}