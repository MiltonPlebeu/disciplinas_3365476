<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
	public function Disciplina()
	{
    	return $this->belongsTo('App\Disciplina');
    }
}
