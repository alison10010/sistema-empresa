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
                            <th scope="col" style="width: 25%">Nome</th>
                            <th scope="col" style="width: 25%">Email</th>
                            <th scope="col" style="width: 20%">Criado</th>
                            <th scope="col" style="width: 15%">Email verificado</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>                             
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->created_at->format('d/m/Y H:i:s') }}</td>
                                <td>
                                    @if($usuario->email_verified_at)
                                        <label style="color: green">Verificado</label>
                                    @else
                                        <label style="color: red">Pendente</label>
                                    @endif
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