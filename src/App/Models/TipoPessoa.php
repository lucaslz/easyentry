<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class TipoPessoa extends Eloquent
{
	protected $fillable = ['id_tipo_pessoa', 'tipo_nome'];
}