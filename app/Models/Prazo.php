<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prazo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_prazo';

    protected $fillable = [
        'data_limite',
    ];
}