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