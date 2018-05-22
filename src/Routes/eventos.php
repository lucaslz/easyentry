<?php

use Slim\Http\Request;
use Slim\Http\Response;
use Core\SApp;

// Rotas da aplicacao
SApp::getApp()->get('/','App\Controllers\ControlarEventos:index');