<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    public function imoveis()
    {
    	//Função que declara a relação das tabelas 
    	return $this->hasMany('App\Imovel', 'cidade_id');
    }
}
