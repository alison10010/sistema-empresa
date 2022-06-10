{{-- MOSTRA DETERMINADOS ERROS AO REGISTRAR DE ACORDO COM A VALIDACAO (StoreUpdadeUserForm ) --}}
@if($errors->any()) 
@foreach ($errors->all() as $erro)
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{ $erro }}
    </div>                 
@endforeach
@endif