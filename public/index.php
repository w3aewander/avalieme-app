<?php
/**
 * Arquivo gateway da aplicação
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */

session_start();

require __DIR__ . '/../vendor/autoload.php';

/* $teste = new \Api\Login\ApiLogin();
echo $teste->auth('wander.silva@gmail.com', '123456');  */

require __DIR__ . '/../routes.php';
