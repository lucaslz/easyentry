<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Rotas da aplicacao
\Core\SApp::getApp()->get('/[{name}]', 'App\Controllers\ControlarEventos:index');