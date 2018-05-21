<?php

if (PHP_SAPI == 'cli-server') {
	// Para ajudar o servidor embutido do PHP,
	// a verifique se a requisição foi realmente
	// algo que provavelmente deveria ser exibido como um arquivo estático
    $url = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

//Inicializando os componentes da aplicacao
require __DIR__ . '/../vendor/autoload.php';

// Inicializando a aplicacao
$settings = require __DIR__ . '/../src/settings.php';
$sApp = new \Core\SApp($settings);
$app = $sApp::getApp();

//Inicializando as Helpers da Aplicacao
require __DIR__ . '/../autoload_helpers.php';

// Setando as dependencias da aplicacao
require __DIR__ . '/../src/dependencies.php';

// Registrando os middleware da aplicacao
require __DIR__ . '/../src/middleware.php';

// Registrando as rotas da aplicacao
require __DIR__ . '/../src/routes.php';

// Rodando a aplicacao
$app->run();