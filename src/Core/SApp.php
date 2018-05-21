<?php

/**
 * @copyright Copyright (c) 2018 Lucas Lima
 */
namespace Core;

/**
 * Classe responsavel por fazer o singleton com a aplicacao
 */
class SApp 
{
	/**
	 * @var $app
	 */
	private static $app;

	/**
	 * Construtor da classe
	 * 
	 * @param $settings configuraao das dependencias
	 */
	public function __construct($settings)
	{
		self::$app = new \Slim\App($settings);
	}

	/**
	 * Retorna a instancia da aplicacao
	 * 
	 * @return $app Aplicacao
	 */
	public static function getApp()
	{
		return self::$app; 
	}
}