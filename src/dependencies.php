<?php
// Condifucação do DIC

$container = $app->getContainer();

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