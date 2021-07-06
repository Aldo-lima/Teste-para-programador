<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class endereco extends Model
{

    protected $fillable =[
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'ponto_referencia',
        'uf',
        'cidade',
        'condominio',
        'fornecedor_id'
       ];



        public function fornecedor(){
            return $this->belongsTo(Fornecedor::class);
        }
}
