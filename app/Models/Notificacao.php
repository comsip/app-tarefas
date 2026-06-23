<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacao extends Model
{
    use HasFactory;
    protected $table = 'notificacao';
    protected $primaryKey = 'id_notificacao';
    public $timestamps = false;
    protected $fillable = [
        'mensagem',
        'data_envio',
        'lida'
    ];
}