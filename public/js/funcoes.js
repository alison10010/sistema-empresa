// FUNCAO QUE MOSTRA O CARGO DE ACORDO COM O SETOR
function cargos() {

    var id = document.getElementById("setor").value;  // PEGA O VALOR DO SETECT SETOR
    $('#cargo').children('option:not(:first)').remove(); //LIMPA A LISTA PARA OS NOVOS VALORES
    $.ajax({
    url: '/funcionario/funcao/'+id, // LOCAL DA BUSCA DA LISTA NO BANCO
    success: function(retorno){
        var cargo = JSON.parse(retorno); // RETORNA A LISTA(CASO NÃO FUNCIONE, TENTE REMOVER O "JSON.parse")
        for(i = 0; i < cargo.length; i++) {
            $('#cargo').append('<option value="'+cargo[i].id+'" >'+cargo[i].nome+'</option>')  
        } 
    }
    });
}

function detalhesFunc(id){  // BUSCA DETALHES DO FUNCIONARIO
    $.ajax({
    url: '/funcionario/detalhes/'+id, // LOCAL DA BUSCA DA LISTA NO BANCO
    success: function(retorno){
        var funcionario = JSON.parse(retorno); 
        $("#p-nome").text(funcionario.nome);
        $("#p-email").text(funcionario.email);
        $("#p-cpf").text(funcionario.cpf);
        $("#p-setor").text(funcionario.setor_id);
        $("#p-cargo").text(funcionario.cargo_id);
        $("#detalheFunc").modal("show");
    }
    });
} 

