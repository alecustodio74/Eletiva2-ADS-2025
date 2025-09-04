<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    public $incrementing = true; //citando a chave primária autoincrement

    protected $fillable = ['nome', 'email'];

}