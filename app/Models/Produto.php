<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // Informa ao Laravel qual é a tabela correta no banco de dados
    protected $table = 'produtos';
    
    // Autoriza o preenchimento desses campos nos formulários
    protected $fillable = ['nome', 'descricao', 'preco', 'quantidade'];
}