<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class DescontoEspecial extends Eloquent
{
	protected $fillable = [
		'id_desconto_especial',
		'nome_desconto_especial',
		'porcentagem_desconto'
	];
}