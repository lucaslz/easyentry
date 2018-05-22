<?php

// Condifucação do DIC
$container = $app->getContainer();

//Redenrizacao de views
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

//Dependencias do banco de dados
$container['db'] = function($c) {
	$manager = new \Illuminate\Database\Capsule\Manager;
	$manager->addConnection($c->get('settings')['db']);
	$manager->setAsGlobal();
	$manager->bootEloquent();
	return $manager->getConnection('default');
};

//Inicializando o banco de dados da aplicacao
$container['db'];