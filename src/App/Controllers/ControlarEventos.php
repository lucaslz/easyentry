<?php

/**
 * @copyright Copyright (c) 2018 Lucas Lima
 */
namespace App\Controllers;

use App\Models\TipoPessoa;

/**
 * Base de todos os controllers da aplicacao
 */
class ControlarEventos
{
	public function index($request, $response, $args)
	{
		return view($response, 'index.phtml', $args);
	}
}