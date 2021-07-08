$(document).ready(function(){
    $('#cep').mask('00.000-000');
    $('#rg').mask('0000.000-0')
    $('#telefone').mask('(00)0000-0000');
    $('#telefone2').mask('(00)0000-0000');
    $('#cpf').mask('000.000.000-00');
    $('#cnpj').mask('00.000.000/0000-00');
 });


 $(document).ready(function() {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
        $("#ibge").val("");
    }

    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#rua").val("...");
                $("#bairro").val("...");
                $("#cidade").val("...");
                $("#uf").val("...");
                $("#ibge").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#uf").val(dados.uf);
                        $("#ibge").val(dados.ibge);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
});

$(document).ready(function(){
    carregar__json('uf');
    function carregar_json(id, cidade){
      var html =''
      $.getJSON('https://gist.githubusercontent.com/letanure/3012978/raw/2e43be5f86eef95b915c1c804ccc86dc9790a50a/estados-cidades.json',function(data){
          html+='<option>Selecionar' + id +'</option>';
          if(id =='Estado'){
              for(var i = 0; i <data.estados.length; i++){
                  html += '<option value='+ data.estados[i].sigla + '>'+data.estados[i].nome+'</option>';
              }
          }
          $('#'+id).html(html);
      });

    }
});
/*
$(document).ready(function(){
    carregar__json('uf');
    function carregar__json(id, cidade){
        var html ='';

        $.getJSON('https://gist.githubusercontent.com/letanure/3012978/raw/2e43be5f86eef95b915c1c804ccc86dc9790a50a/estados-cidades.json', function(data){

            html +='<option>Selecionar Estado' + id +'</option>';
            if(id == 'uf'&& cidade == null){
                for(var i = 0; i <data.estados.length; i++){
                    html +='<option value=>'+data.estados[i].sigla+ '-' +data.estados[i].nome+'</option>'
                }
             }else{
                 for(var i =0; 1< data.estados.length; i++){
                      if(data.estados[i].sigla == cidade){
                          for(var j = 0; j< data.estados[i].cidades.length; j++){
                          html += '<option value=' +data.estados[i].sigla+'>'+ data.estados[i].cidades[j]+'</option>';
                       }
                 }
            }
        }

         $('#'+id).html(html);
    });
}
$(document).on('change', '#uf',function(){
 var cidade = $(this).val();
 console.log(cidade);
 if(cidade != null){
     carregar__json('cidade', cidade);
 }
});
*/



