@extends('base')
@section('conteudo-principal')
<style>
    #formulario {
        background-color: aquamarine;
        padding: 20px;
    }
</style>

<h1>Editar</h1>
 <div id="formulario" >
    <form action="{{route('fornecedor.store')}}" method="PUT" >
      @csrf
      <div id="form-pessoa" style="background-color: #ffff; padding:10px; margin:20px;" id="form_pess_fisica">
          <div classe="row" id="form-pessoa">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tipo" id="inlineRadio1" value="{{old('titulo',$fornecedor->titilo ?? '' )}}" required>
                <label class="form-check-label" for="inlineRadio1">Pessoa Juridica</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"   name="tipo" id="inlineRadio2" value="{{old('titulo',$fornecedor->titilo ?? '' )}}" required>
                <label class="form-check-label" for="inlineRadio2">Pessoa Fisica</label>
            </div>

             </div>
             <div class="row">
                <div class="col-3">
                    <label for="exampleInputEmail1" class="form-label">CNPJ</label>
                    <input type="text" name="cnpj_cpf" class="form-control" value="{{old('cnpj_cpf',$fornecedor->cnpj_cpf ?? '' )}}" id="cnpj" data-js="cnpj" required>
                    <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="col-6">
                    <label for="exampleInputPassword1" class="form-label">Nome</label>
                    <input type="text"  name="nome_fantasia" value="{{old('nome_fantasia',$fornecedor->nome_fantasia ?? '' )}}"  class="form-control" id="" required>
                    </div>
                    <div class="col-3">
                        <label for="exampleInputPassword1" class="form-label">NomeFantazia</label>
                        <input type="text" name="apelido" value="{{old('apelido',$fornecedor->apelido ?? '' )}}" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <div class="col-3" >
                    <div >
                        <label for="disabledSelect" class="form-label">Identificação de iscrição Estadual</label>
                        <select name="ativo" id="disabledSelect" value="{{old('ativo',$fornecedor->ativo ?? '' )}}" class="form-select" required>
                            <option value="">Selecione</option styler="font-size:20px">
                            <option type="text"  value="Contribuinte" >Contribuinte</option>
                            <option type="text"  value="Contribuinte Isento" >Contribuinte Isento</option>
                            <option type="text"  value="Contribuinte Isento" >Não Contribuinte</option>
                          </select>
                   </div>
                    </div>
                    <div class="col-3">
                        <label for="exampleInputPassword1" class="form-label">Incrição Estadoal</label>
                        <input type="number" name="rg" value="{{old('cnpj_rg',$fornecedor->rg ?? '' )}}" class="form-control" id="ex" required>
                    </div>
                    <div class="col-3">
                        <label for="exampleInputPassword1" class="form-label">Incrição municipal</label>
                        <input type="number" name="rg" value="{{old('rg',$fornecedor->rg ?? '' )}}" class="form-control" id="ex" required>
                    </div>
                    <div class="col-3">
                        <label for="exampleInputPassword1" class="form-label">Situação CNPJ</label>
                        <input type="number" name="situacao-cnpj" value="{{old('situacao-cnpj',$fornecedor->situacoa->cnpj ?? '' )}}" class="form-control" id="ex" required>
                    </div>
                    <div >
                        <div class="col-md-3">
                            <label for="disabledSelect" class="form-label">Ativo</label>
                            <select name="ativo" value={{old('ativo',$fonecedor->ativo ?? '' )}} id="disabledSelect" class="form-select" required>
                                <option value="">Selecione</option styler="font-size:20px">
                                <option type="text"  value="sim" >sim</option>
                                <option type="text"  value="não" >não</option>
                              </select>
                       </div>
                    </div>
            </div>
          </div>
      <div>

          <div id="form_contato_principal" style="background-color: #ffff; padding:10px; margin:20px;" id="form_pess_fisica" >
                  <div class="row">
                        <div id="teste" class="col-3">
                              <label for="inputEmail4" class="form-label">Telefone</label>
                                <input type="text" name="telefone" value="{{old('telefone',$fonecedor->contatoPrincipal->telefone ?? '' )}}"  class="form-control" id="telefone" data-js="telefone"> required>
                                <a href="#" id="add-campo" class="tel">Adicionar</a>
                        </div>

                        <div class="col-3">
                              <label for="inputState" name="tipo" class="form-label">Tipo</label>
                             <select id="inputState" name="tipo_telefone" value="{{old('tipo_telefone',$fonecedor->contatoPrincipal->tipo_telefone ?? '' )}}"  class="form-select" required>
                               <option selected>Celular</option>
                               <option>Residencial</option>
                               <option>Comercial</option>
                             </select>
                        </div>


       <!--================================================================================================-->


                       <div  class="col-3">
                              <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" name="email" value="{{old('email',$fonecedor->contatoPrincipal->email ?? '' )}}"  class="form-control" id="email" required>
                                <a href="#" id="add-campo2">Adicionar</a>
                        </div>

                        <div  class="col-3">
                              <label for="inputState" class="form-label">Tipo</label>
                              <select id="inputState" name="tipo_email" value="{{old('tipo_email',$fonecedor->contatoPrincipal->tipo_email ?? '' )}}"   class="form-select" required>
                               <option selected>Celular</option>
                               <option>Residencial</option>
                               <option>Comercial</option>
                             </select>
                        </div>


                  </div>


                  <a href="#" id="add-cotato-adicional">Contato adicional</a><br>
</div>
<!--===================================================================================-->
   <div id="contato adicional" style="background-color: #ffff; padding:10px; margin:20px;" id="form_pess_fisica" >
         <div class="row">
          <div class="col-6">
            <label for="exampleInputPassword1" class="form-label">Nome</label>
            <input type="text" name="nome" value="{{old('nome',$fonecedor->contatosAdicional->nome ?? '' )}}"  class="form-control" id="exampleInputPassword1" required>
          </div>
           <div class="col-3">
            <label for="exampleInputPassword1" class="form-label">Empresa</label>
            <input type="text" name="empresa" value="{{old('empresa',$fonecedor->contatosAdicional->empresa ?? '' )}}" class="form-control" id="exampleInputPassword1" required>
          </div>
          <div class="col-3">
            <label for="exampleInputPassword1" class="form-label">Cargo</label>
            <input type="text" name="cargo" value="{{old('cargo',$fonecedor->contatosAdicional->cargo ?? '' )}}" class="form-control" id="exampleInputPassword1" required>
          </div>
       </div >
       <div class="row">
        <div class="col-3">
            <label for="exampleInputPassword1" class="form-label">Telefone</label>
            <input type="text" name="telefone" value="{{old('telefone',$fonecedor->contatosAdicional->telefone ?? '' )}}" class="form-control" data-js="telefone"> id="exampleInputPassword1" required>
          </div>

                <div id="formulario4" class="col-3">
                  <label for="inputState" class="form-label">Tipo</label>
                 <select id="inputState" name="tipo_telefone" value="{{old('tipo_telefone',$fonecedor->contatosAdicional->tipo_telefone ?? '' )}}"  class="form-select" required>
                 <option selected>Celular</option>
                 <option>Residencial</option>
                 <option>Comercial</option>
                 </select>
                </div>

          <div class="col-3">
            <label for="exampleInputPassword1" class="form-label">email</label>
            <input type="email" name="email" value="{{old('email',$fonecedor->contatosAdicional->email ?? '' )}}" class="form-control" id="exampleInputPassword1" required>
          </div>

          <div  class="col-3">
            <label for="inputState" class="form-label">Tipo</label>
           <select id="inputState" name="tipo_email" value="{{old('tipo_email',$fonecedor->contatosAdicional->email ?? '' )}}"  class="form-select" required>
             <option selected>Celular</option>
             <option>Residencial</option>
             <option>Comercial</option>
           </select>
           </div>

       </div>
   </div>
<!--================================================================================== -->

                 <a href="#" id="marcador"></a>

              <div id="form_endereco" style="background-color: #ffff; padding:10px; margin:20px; ">
                        <div class="row">
                            <div class="col-4">
                                <label for="exampleInputPassword1" class="form-label">CEP</label>
                                <input type="text" name="cep" value="{{old('cep',$fonecedor->endereco->cep ?? '' )}}" value=""onblur="pesquisacep(this.value);" class="form-control" id="cep" data-js="cep"> required>
                            </div>
                            <div class="col-4">
                                <label for="exampleInputPassword1" class="form-label">Logradouro</label>
                                <input type="text" name="logradouro" value="{{old('logradouro',$fonecedor->endereco->logradouro ?? '' )}}" class="form-control" id="rua" required>
                            </div>
                            <div class="col-3">
                                <label for="exampleInputPassword1" class="form-label">Numero</label>
                                <input type="number" name="numero" value="{{old('numero',$fonecedor->endereco->numero ?? '' )}}" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <div class="col-4">
                                <label for="exampleInputPassword1" class="form-label">Complemento</label>
                                <input type="text" name=complemento  value="{{old('complemento',$fonecedor->endereco->complemento ?? '' )}}" class="form-control" id="" required>
                            </div>
                            <div class="col-4">
                                <label for="exampleInputPassword1" class="form-label">Bairro</label>
                                <input type="text" name="bairro" value="{{old('bairro',$fonecedor->endereco->bairro ?? '' )}}" class="form-control" id="bairro" required>
                            </div>
                            <div class="col-4">
                                <label for="exampleInputPassword1" class="form-label">Ponto de Referencia</label>
                                <input type="text" name="ponto_referencia" value="{{old('ponto_referencia',$fonecedor->endereco->ponto_referencia ?? '' )}}" class="form-control" id="exampleInputPassword1">
                            </div>

                            <div  class="col-4" >
                                <label for="disabledSelect" class="form-label" >UF</label>
                                <select  name="uf" id="uf" value="{{old('uf',$fonecedor->endereco->uf ?? '' )}}"class="form-select" required>
                                    <option value="SP">Selecione istado</option>
                                    <option value="RJ">Selecione istado</option>
                                    <option value="PR">Selecione istado</option>

                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="disabledSelect" class="form-label">Cidade</label>
                                <select name="cidade" value="{{old('cidade',$fonecedor->endereco->cidade ?? '' )}}" id="cidade" class="form-select" required>
                                    <option>Selecione</option>
                                    <option name="cidade" type="text" value="maringa">Maringa</option>
                                    <option name="cidade" type="text" value="São Paulo">São Paulo</option>
                                    <option name="cidade" type="text" value="belo Hurizonte">Minas Gerais</option>
                                </select>
                            </div>


                            <div class="col-md-4">
                                <label for="disabledSelect" class="form-label">Condominio</label>
                                <select name="condominio" value="{{old('comdominio',$fonecedor->endereco->comdominio ?? '' )}}" id="disabledSelect" class="form-select" required>
                                <option>Selecione</option>
                                <option name="condominio" value="sim">sim</option>
                                <option name="condominio" value="não">não</option>
                                </select>
                            </div><br>

                        </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
                    <textarea name="observacao" value="{{old('observacao',$fonecedor->endereco->obsevacao ?? '' )}}" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>






@section('conteudo-Secudario')
@endsection
<script>
 //=====================================mascara===============


     const masks={
        cpf(value){
            return value
            .replace( /\D/g, '' )
            .replace(/(\d{3})(\d)/, '$1.$2')
            .replace(/(\d{3})(\d)/, '$1.$2')
            .replace(/(\d{3})(\d{1,2})/, '$1-$2')
            .replace(/(-\d{2})\d+?$/, '$1')
        },
        cnpj (value){
            return value
            .replace( /\D/g, '' )
            .replace(/(\d{2})(\d)/, '$1.$2')
            .replace(/(\d{3})(\d)/, '$1.$2')
            .replace(/(\d{4})(\d)/, '$1/$2')
            .replace(/(\d{3})(\d)/, '$1-$2')
            .replace(/(\d{3})(\d{1,2})/, '$1-$2')
            .replace(/(-\d{2})\d+?$/, '$1')
        },

        telefone (value){
            return value
            .replace( /\D/g, '' )
            .replace(/(\d{2})(\d)/, '($1) $2')
            .replace(/(\d{4})(\d)/, '$1-$2')
            .replace(/(-\d{5})\d+?$/, '$1')
        },


        cep(value){
        return value
        .replace( /\D/g, '' )
        .replace(/(\d{5})(\d)/, '$1-$2')
        .replace(/(-\d{3})\d+?$/, '$1')
        }
     }

   document.querySelectorAll('input').forEach(($input)=>{
   const field = $input.dataset.js
    $input.addEventListener('input', (e)=>{
     e.target.value = masks[field](e.target.value)
 }, false)
 })
//=============================================================

function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

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
    };




</script>

