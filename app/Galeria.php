<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Galeria extends Model
{
    public function Imovel()
    {

    return $this->belongsTo('App\Imovel','imovel_id');
}

}
