<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    protected $fillable= [
    	'name', 'descricao'
    ];

    public function permisses()
    {
    	return $this->belongsToMany(Permiss::class);
    }
}
