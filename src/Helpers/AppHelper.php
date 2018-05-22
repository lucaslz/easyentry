<?php

if (!function_exists("autoLoadRoutes")) {

	/**
	 * Helper responsavel por carregar todas as rotas da aplicacao
	 */
	function autoLoadRoutes()
	{
		$files = glob(__DIR__ . "/../Routes/*.php");
		foreach ($files as $file) {
    		require($file);   
		}
		unset($files);
	}
}


if (!function_exists("view")) {

	/**
	 * Helper responsavel por renderizar as views
	 */
	function view($response, $page, $args)
	{
		return Core\SApp::getApp()->getContainer()->renderer->render(
			$response,
			$page,
			$args
		);
	}
}

if (!function_exists("container")) {
	
	/**
	 * Helper responsavel por chamar o container
	 */
	function container($response, $page, $args)
	{
		return Core\SApp::getApp()->getContainer();
	}
}