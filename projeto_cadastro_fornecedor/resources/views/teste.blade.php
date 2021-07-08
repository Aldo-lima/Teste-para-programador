
<input type="text" data-js="cpf">
<input type="text" data-js="cnpj">
<input type="text" data-js="telefone">
<input type="text" data-js="cep">


<script>
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
        .replace(/(-\d{2})\d+?$/, '$1')
        }
     }

   document.querySelectorAll('input').forEach(($input)=>{
   const field = $input.dataset.js
    $input.addEventListener('input', (e)=>{
     e.target.value = masks[field](e.target.value)
 }, false)
 })

</script>


