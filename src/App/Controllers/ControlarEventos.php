<?php

/**
 * @copyright Copyright (c) 2018 Lucas Lima
 */
namespace App\Controllers;

use App\Models\TipoPessoa;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Base de todos os controllers da aplicacao
 */
class ControlarEventos
{
	public function index($request, $response, $args)
	{
		$tipoPessoa = TipoPessoa::get();
		return $response->withJson($tipoPessoa, 200);
	}
}