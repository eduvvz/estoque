<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $timestamps = false;

    public $fillable = array('nome', 'descricao', 'valor', 'quantidade', 'tamanho');
}
