<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    public function imoveis()
    {
    	//Função que declara a relação das tabelas 
    	return $this->hasMany('App\Imovel', 'tipo_id');
    }
}
