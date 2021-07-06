<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class fornecedor extends Model
{
    protected $fillable =[
        'tipo',
        'nome_fantasia',
        'apelido',
        'razaosocial',
        'indicador_de_inscricao_estadual',
        'inscricao_estadual',
        'inscricao_municipal',
        'situacao-cnpj',
        'recolhimento',
        'ativo',
        'rg',
        'cnpj_cpf',
        'observacao',
    ];

   public function endereco(){
       return $this->hasOne(Endereco::class);
   }

   public function contatoPrincipal(){
    return $this->hasMany(contato_principal::class);
}
   public function contatosAdicional(){
       return $this->hasMany(contatos_adicional::class);
   }

}
