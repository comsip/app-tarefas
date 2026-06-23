<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status'; // 🔥 CORREÇÃO PRINCIPAL
    protected $primaryKey = 'id'; // 🔥 CORREÇÃO PRINCIPAL

    protected $fillable = ['nome'];
}