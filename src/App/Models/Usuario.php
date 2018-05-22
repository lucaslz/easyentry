<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Usuario extends Eloquent
{
	protected $fillable = [
		'id_usuario',
		'id_tipo_usuario',
		'id_tipo_pessoa',
		'id_pessoa',
		'email',
		'senha'
	];

	protected $primaryKey = 'id_usuarios';
}