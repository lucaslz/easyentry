<?php
use Slim\Http\Request;
use Slim\Http\Response;
use Firebase\JWT\JWT;
use App\Models\Usuario;
use Core\SApp;

/**
 * Rota para gerar um token apartir de um email e uma senha
 * de um usuario cadastrado no banco
 */

SApp::getApp()->post(
	'/auth/token',
	function(Request $request, Response $response, array $args)
{
	$data = $request->getParsedBody();
	$email = $data['email'] ?? null;
	$senha = $data['senha'] ?? null;
	$user = Usuario::where('email', $email)->first();

	if(!is_null($user) && password_verify($senha, $user->senha)) {
		$key = $this->get('settings')['secretKey'];
		return $response->withJson([
			'token' => JWT::encode($user, $key)
		]);
	}

	return $response->withJson(['status' => 'error'], 401);
});