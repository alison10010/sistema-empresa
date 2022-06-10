<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>

    <!-- Custom styles for this template -->
    <link href="/css/bootstrap/sb-admin-2.min.css" rel="stylesheet">
    <link href="/css/estilo.css" rel="stylesheet">

</head>
<body style="background-color: #F3F4F6"> 

    <br />
    <center><img src="https://logospng.org/download/laravel/logo-laravel-1024.png" style="max-width: 15%"></center>
    <div class="card card-primary desktop">

        @include('include/msgError')

        <form action="{{route('user.store')}}" method="POST" autocomplete="off">
            @csrf {{-- NECESSARIO PARA REALIZAR O SALVAMENTO DO FORM NO BD --}}
            <div class="card-body">
            <div class="form-group"> 
                <label for="Nome">Nome</label>
                <input type="txt" name="name" class="form-control" id="Nome" minlength="3" placeholder="Digite o nome completo" required value="{{ old('name') }}"> {{-- VALUE 'OLD' MANTEM O VALOR DIGITADO CASO OCORRA UM ERRO --}}
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" name="email" class="form-control" id="Email" placeholder="Digite seu email" required value="{{ old('Email') }}">
            </div>
            <div class="form-group">
            <label for="Senha">Senha</label>
            <input type="password" name="password" class="form-control" id="Senha" minlength="6" maxlength="15" required placeholder="Digite uma senha">
            </div>
            
            <div class="card-footer">
                <a type="button" class="btn btn-danger btn-md" href="{{route('user.gerenciar')}}">Voltar</button></a>    
            <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </form>
        </div>

<!-- Bootstrap core JavaScript-->
<script src="/css/bootstrap/jquery.min.js"></script>
<script src="/css/bootstrap/bootstrap.bundle.min.js"></script>

</body>
</html> 

