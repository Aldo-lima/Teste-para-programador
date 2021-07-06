<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contatos_adicional extends Model
{
    protected $fillable =[
        'nome',
        'empresa',
        'cargo',
        'telefone',
        'tipo_telefone',
        'email',
        'tipo_email',
        'fornecedor_id',
    ];
    public function fornecidor(){
        return $this->belongsTo(Fornecedo::class);
     }

}
