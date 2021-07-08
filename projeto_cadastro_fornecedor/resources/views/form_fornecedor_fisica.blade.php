@extends('base')
@section('conteudo-principal')
<style>
    #formulario {
        background-color: aquamarine;
        padding: 20px;
    }
</style>

<h1> fisica</h1>
 <div id="formulario" >
    <form action="{{route('fornecedor.store')}}" method="POST" >
      @csrf
      <div id="form-pessoa" style="background-color: #ffff; padding:10px; margin:20px;" id="form_pess_fisica">
          <div classe="row" id="form-pessoa">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"  onclick="location.href='{{route('fornecedor.create')}}'" name="tipo" id="inlineRadio1" value="option1" required>
                <label class="form-check-label" for="inlineRadio1">Pessoa Juridica</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tipo" id="inlineRadio2" value="option2" required>
                <label class="form-check-label" for="inlineRadio2">Pessoa Fisica</label>
            </div>

             </div>
             <div class="row">
                <div class="col-3">
                    <label for="exampleInputEmail1" class="form-label">CPF</label>
                    <input type="text" name="cnpj_cpf" class="form-control" id="cnpj" data-js="cpf" required>
                    <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="col-6">
                    <label for="exampleInputPassword1" class="form-label">Nome</label>
                    <input type="text"  name="nome_fantasia" class="form-control" id="" required>
                    </div>
                    <div class="col-3">
                        <label for="exampleInputPassword1" class="form-label">Apelido</label>
                        <input type="text" name="apelido" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <div class="col-3">
                        <label for="exampleInputPassword1" class="form-label">RG</label>
                        <input type="number" name="rg" class="form-control" id="ex" required>
                    </div>
                    <div class="col-3" >
                    <div >
                        <label for="disabledSelect" class="form-label">Ativo</label>
                        <select name="ativo" id="disabledSelect" class="form-select" required>
                            <option>Selecione</option styler="font-size:20px">
                            <option type="text"  value="Sim" >si</option>
                            <option type="text"  value="Não" >Contribuinte Isento</option>
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
                                <input type="text" name="telefone" class="form-control" id="telefone" data-js="telefone"> required>
                                <a href="#" id="add-campo" class="tel">Adicionar</a>
                        </div>

                        <div class="col-3">
                              <label for="inputState" name="tipo" class="form-label">Tipo</label>
                             <select id="inputState" name="tipo_telefone" class="form-select" required>
                               <option selected>Celular</option>
                               <option>Residencial</option>
                               <option>Comercial</option>
                             </select>
                        </div>


       <!--================================================================================================-->


                       <div  class="col-3">
                              <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                                <a href="#" id="add-campo2">Adicionar</a>
                        </div>

                        <div  class="col-3">
                              <label for="inputState" class="form-label">Tipo</label>
                              <select id="inputState" name="tipo_email"   class="form-select" required>
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
            <input type="text" name="nome" class="form-control" id="exampleInputPassword1" required>
          </div>
           <div class="col-3">
            <label for="exampleInputPassword1" class="form-label">Empresa</label>
            <input type="text" name="empresa" class="form-control" id="exampleInputPassword1" required>
          </div>
          <div class="col-3">
            <label for="exampleInputPassword1" class="form-label">Cargo</label>
            <input type="text" name="cargo" class="form-control" id="exampleInputPassword1" required>
          </div>
       </div >
       <div class="row">
        <div class="col-3">
            <label for="exampleInputPassword1" class="form-label">Telefone</label>
            <input type="text" name="telefone" class="form-control" data-js="telefone"> id="exampleInputPassword1" required>
          </div>

                <div id="formulario4" class="col-3">
                  <label for="inputState" class="form-label">Tipo</label>
                 <select id="inputState" name="tipo_telefone"   class="form-select" required>
                 <option selected>Celular</option>
                 <option>Residencial</option>
                 <option>Comercial</option>
                 </select>
                </div>

          <div class="col-3">
            <label for="exampleInputPassword1" class="form-label">email</label>
            <input type="email" name="email" class="form-control" id="exampleInputPassword1" required>
          </div>

          <div  class="col-3">
            <label for="inputState" class="form-label">Tipo</label>
           <select id="inputState" name="tipo_email"   class="form-select" required>
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
                                <input type="text" name="cep" value="" class="form-control" id="cep" data-js="cep"> required>
                            </div>
                            <div class="col-4">
                                <label for="exampleInputPassword1" class="form-label">Logradouro</label>
                                <input type="text" name="logradouro" class="form-control" id="rua" required>
                            </div>
                            <div class="col-3">
                                <label for="exampleInputPassword1" class="form-label">Numero</label>
                                <input type="number" name="numero" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            <div class="col-4">
                                <label for="exampleInputPassword1" class="form-label">Complemento</label>
                                <input type="text" name=complemento class="form-control" id="" required>
                            </div>
                            <div class="col-4">
                                <label for="exampleInputPassword1" class="form-label">Bairro</label>
                                <input type="text" name="bairro" class="form-control" id="bairro" required>
                            </div>
                            <div class="col-4">
                                <label for="exampleInputPassword1" class="form-label">Ponto de Referencia</label>
                                <input type="text" name="ponto_referencia" class="form-control" id="exampleInputPassword1">
                            </div>

                            <div  class="col-4" >
                                <label for="disabledSelect" class="form-label" >UF</label>
                                <select  name="uf" id="uf" class="form-select" required>
                                    <option value="SP">Selecione istado</option>
                                    <option value="RJ">Selecione istado</option>
                                    <option value="PR">Selecione istado</option>

                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="disabledSelect" class="form-label">Cidade</label>
                                <select name="cidade" id="cidade" class="form-select" required>
                                    <option>Selecione</option>
                                    <option name="cidade" type="text" value="maringa">Maringa</option>
                                    <option name="cidade" type="text" value="São Paulo">São Paulo</option>
                                    <option name="cidade" type="text" value="belo Hurizonte">Minas Gerais</option>
                                </select>
                            </div>


                            <div class="col-md-4">
                                <label for="disabledSelect" class="form-label">Condominio</label>
                                <select name="condominio" id="disabledSelect" class="form-select" required>
                                <option>Selecione</option>
                                <option name="condominio" value="sim">sim</option>
                                <option name="condominio" value="não">não</option>
                                </select>
                            </div><br>

                        </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
                    <textarea name="observacao" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
</script>

