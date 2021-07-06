@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
   <h1>fornecedor</h1>
@stop

@section('content')
<div id="formulario" >
    <form action="{{$action}}" method="POST" >
      @csrf
      <a href="{{route('pfornecedor.juridico')}}">
      <div id="form-pessoa" style="background-color: #ffff; padding:10px; margin:20px;" id="form_pess_fisica">
          <div classe="row" id="form-pessoa">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tipo" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Pessoa Juridica</label>
              </div>
            </a>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tipo" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Pessoa Fisica</label>
              </div>
             </div>
             <div class="row">
                <div class="col-4">
                    <label for="exampleInputEmail1" class="form-label">CPF</label>
                    <input type="number" name="cnpj_cpf" class="form-control" id="cpf">
                    <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="col-4">
                    <label for="exampleInputPassword1" class="form-label">Nome</label>
                    <input type="text"  name="nome_fantasia" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="col-4">
                        <label for="exampleInputPassword1" class="form-label">Apelido</label>
                        <input type="text" name="apelido" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="col-4">
                        <label for="exampleInputPassword1" class="form-label">Rg</label>
                        <input type="number" name="rg" class="form-control" id="ex">
                    </div>
                    <div >
                      <div class="col-md-7">
                         <label for="disabledSelect" class="form-label">Ativo</label>
                         <select name="ativo" id="disabledSelect" class="form-select">
                             <option value="">Selecione</option styler="font-size:20px">
                             <option type="text"  value="sim" >sim</option>
                             <option type="text"  value="não" >não</option>
                           </select>
                    </div>
                    </div>
            </div>
          </div>
      <div>

          <div id="form_contato_principal" style="background-color: #ffff; padding:10px; margin:20px;" id="form_pess_fisica" ></form>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div id="formulario" class="col-6">
                              <label for="inputEmail4" class="form-label">Telefone</label>
                                <input type="text" name="telefone" class="form-control" id="telefone">
                                <a href="#" id="add-campo" class="tel">Adicionar</a>
                        </div>
                         <div>
                        <div id="formulario2"  class="col-6">
                              <label for="inputState" name="tipo" class="form-label">Tipo</label>
                             <select id="inputState" name="tipo_telefone" class="form-select">
                               <option selected>Celular</option>
                               <option>Residencial</option>
                               <option>Comercial</option>
                             </select>
                        </div>
                    </div>

               </div>
    </div>
       <!--================================================================================================-->
            <div class="col-sm-6">
                  <div class="row">
                       <div id="formulario3" class="col-6">
                              <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email">
                                <a href="#" id="add-campo2">Adicionar</a>
                        </div>
                        <div>
                        <div id="formulario4" class="col-6">
                              <label for="inputState" class="form-label">Tipo</label>
                             <select id="inputState" name="tipo_email"   class="form-select">
                               <option selected>Celular</option>
                               <option>Residencial</option>
                               <option>Comercial</option>
                             </select>
                        </div>
                        </div>

                  </div>
            </div>
            </div>
                  <a href="#" id="add-cotato-adicional">Contato adicional</a><br>
</div>
<!--===================================================================================-->
   <div id="contato adicional" style="background-color: #ffff; padding:10px; margin:20px;" id="form_pess_fisica" >
         <div class="row">
          <div class="col-6">
            <label for="exampleInputPassword1" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="exampleInputPassword1">
          </div>
           <div class="col-3">
            <label for="exampleInputPassword1" class="form-label">Empresa</label>
            <input type="text" name="empresa" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="col-3">
            <label for="exampleInputPassword1" class="form-label">Cargo</label>
            <input type="password" name="cargo" class="form-control" id="exampleInputPassword1">
          </div>
       </div >
       <div class="row">
        <div class="col-3">
            <label for="exampleInputPassword1" class="form-label">Telefone</label>
            <input type="text" name="telefone" class="form-control" id="exampleInputPassword1">
          </div>
          <div>
            <div id="formulario4" class="col-3">
              <label for="inputState" class="form-label">Tipo</label>
             <select id="inputState" name="tipo_telefone"   class="form-select">
               <option selected>Celular</option>
               <option>Residencial</option>
               <option>Comercial</option>
             </select>
             </div>
            </div>
          <div class="col-3">
            <label for="exampleInputPassword1" class="form-label">email</label>
            <input type="email" name="email" class="form-control" id="exampleInputPassword1">
          </div>
          <div>
          <div id="formulario4" class="col-3">
            <label for="inputState" class="form-label">Tipo</label>
           <select id="inputState" name="tipo_email"   class="form-select">
             <option selected>Celular</option>
             <option>Residencial</option>
             <option>Comercial</option>
           </select>
           </div>
          </div>
       </div>
   </div>
<!--================================================================================== -->

                 <a href="#" id="marcador"></a>

              <div id="form_endereco" style="background-color: #ffff; padding:10px; margin:20px; ">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="exampleInputPassword1" class="form-label">CEP</label>
                                <input type="number" name="cep" value="" class="form-control" id="cep">
                            </div>
                            <div class="col-md-4">
                                <label for="exampleInputPassword1" class="form-label">Logradouro</label>
                                <input type="text" name="logradouro" class="form-control" id="rua">
                            </div>
                            <div class="col-mb-5">
                                <label for="exampleInputPassword1" class="form-label">Numero</label>
                                <input type="number" name="numero" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="col mb-4">
                                <label for="exampleInputPassword1" class="form-label">Complemento</label>
                                <input type="text" name=complemento class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="col-md-4">
                                <label for="exampleInputPassword1" class="form-label">Bairro</label>
                                <input type="text" name="bairro" class="form-control" id="bairro">
                            </div>
                            <div class="col-md-4">
                                <label for="exampleInputPassword1" class="form-label">Ponto de Referencia</label>
                                <input type="text" name="ponto_referencia" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="col-md-4">
                            <div  class="col-md-4" >
                                <label for="disabledSelect" class="form-label" >UF</label>
                                <select  name="uf" id="uf" class="form-select">
                                    <option>Selecione</option>
                                    <option name="uf" type="text" value="PR">Parana</option>
                                    <option name="uf" type="text" value="SP">São Paulo</option>
                                    <option name="uf" type="text" value="">Minas Gerais</option>
                                </select>
                            </div>
                            </div>
                            <div>
                            <div class="col-md-4">
                                <label for="disabledSelect" class="form-label">Cidade</label>
                                <select name="cidade" id="cidade" class="form-select">
                                    <option>Selecione</option>
                                    <option name="cidade" type="text" value="maringa">Maringa</option>
                                    <option name="cidade" type="text" value="São Paulo">São Paulo</option>
                                    <option name="cidade" type="text" value="belo Hurizonte">Minas Gerais</option>
                                </select>
                            </div>
                           </div>
                           <div>
                            <div class="col-md-4">
                                <label for="disabledSelect" class="form-label">Condominio</label>
                                <select name="condominio" id="disabledSelect" class="form-select">
                                <option>Selecione</option>
                                <option name="condominio" value="sim">sim</option>
                                <option name="condominio" value="não">não</option>
                                </select>
                            </div>
                        </div>
                        </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
                    <textarea name="observacao" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>


@stop
@section('css')
   <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>



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

</script>
@stop
