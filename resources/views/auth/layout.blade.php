<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Custom styles for this template -->
    <link href="/css/bootstrap/sb-admin-2.min.css" rel="stylesheet">
    <link href="/css/estilo.css" rel="stylesheet">

</head>

<body style="background-color: #F3F4F6"> 

    <br />
    <center><img src="https://logospng.org/download/laravel/logo-laravel-1024.png" style="max-width: 15%"></center>
    <div class="card card-primary desktop">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        @include('include/msgError')

        @yield('content') {{-- CONTEUDO DAS PAGINAS --}}

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/css/bootstrap/jquery.min.js"></script>
    <script src="/css/bootstrap/bootstrap.bundle.min.js"></script>

</body>
</html> 

        

