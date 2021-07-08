<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
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
    return $this->hasMany(Contato_principal::class);
}
   public function contatosAdicional(){
       return $this->hasMany(Contato_adicional::class);
   }

   public function filtrar($filter = null)
   {
       $results = $this->where(function ($query) use($filter){
           if ($filter){
               $query->where('nome_fantasia', 'LIKE', "%{$filter}%");
           }

       })//->toSql();
       ->paginate();
     return $results;
   }
}
