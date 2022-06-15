@extends('template.template')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Editar usuario') {{-- TITULO DA PAGE --}}

@section('content') {{-- CONTEUDO DA PAGE - INICIO --}}

<div class="container">

    {{-- EDICAO DE USUAIO--}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="h3 mb-0 text-gray-800">Edição do usuario</b></h3>
    </div> 

    @include('include/msgError')  {{-- MGS DE ERROR NOS FORMULARIOS DE VALIDACAO --}}

    <div class="form">
        <form action="{{ route('user.update', $usuario->id) }}" method="POST" autocomplete="off"> 
            @csrf {{-- NECESSARIO PARA REALIZAR A EDIÇÃO DO FORM NO BD --}}
            @method('PUT') {{-- NECESSARIO PARA REALIZAR A EDIÇÃO DO FORM NO BD --}}

            <div class="form-group">
                <label for="nome">Nome do usuario:</label>
                <input type="txt" class="form-control" id="name" name="name" value="{{$usuario->name}}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$usuario->email}}" required>
            </div>

            <div class="form-group">
                <label for="password">Nova senha(opcional):</label>
                <input type="password" class="form-control" id="email" name="password">
            </div>

            <a type="button" class="btn btn-danger btn-md" href="/user/gerenciar">Cancelar</button></a> 
            <button type="submit" class="btn btn-primary">Finalizar</button>
        </form>
    </div>
 
</div>


@endsection  {{-- CONTEUDO DA PAGE - FIM --}}