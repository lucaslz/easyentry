<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Rotas da aplicacao
\Core\SApp::getApp()->get('/[{name}]', function (Request $request, Response $response, array $args) {
	$tipoPessoa = App\Models\TipoPessoa::get();
	return $response->withJson($tipoPessoa);
});