<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiss extends Model
{
    protected $fillable= [
    	'name', 'descricao'
    ];

    public function papers()
    {
    	return $this->belongsToMany(Paper::class);
    }
}
