@extends('template.template')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Gerenciamento de usuario') {{-- TITULO DA PAGE --}}

@section('content') {{-- CONTEUDO DA PAGE - INICIO --}}

<div class="container">
    
    {{-- LISTAGEM DE USUARIO--}}

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4"> 
        <h1 class="h3 mb-0 text-gray-800">Gerenciamento de usuario</h1>
    </div>

    <!-- DataTales -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 23%">Nome</th>
                            <th scope="col" style="width: 10%">Email</th>
                            <th style="width: 15%"><center>Ações <i class="fa fa-cogs fa-1.5x fa-fw" aria-hidden="true"></i></center></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>                             
                                <td>{{ $usuario->name }}</td> 
                                <td>{{ $usuario->email }}</td>
                                <td>
                                    <center>
                                    <a class="btn btn-info btn-circle" href="{{route('user.edit', $usuario->id)}}">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i></ion-icon>
                                    </a>
                                    &nbsp;

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