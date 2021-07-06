<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contato_principal extends Model
{
    protected $fillable =[
        'telefone',
        'tipo_telefone',
        'email',
        'tipo_email',
        'fornecedor_id'
    ];
    public function fornecidor(){
        return $this->belongsTo(Fornecedo::class);
     }

}
