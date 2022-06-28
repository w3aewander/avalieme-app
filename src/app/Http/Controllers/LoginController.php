<?php
/**
 * Class LoginController
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @version 1.0
 * 
 */

 namespace App\Http\Controllers;

 use Psr\Http\Message\ResponseInterface as Response;
 use Psr\Http\Message\ServerRequestInterface as Request;
 use Slim\Factory\AppFactory;

 class LoginController {
    
    public function index(Request $request, Response $response, array $args){
    
        \ob_start();

        require_once __DIR__ . "/../../templates/header.html.php";
        require_once __DIR__ . "/../../templates/login.html.php";
        require_once __DIR__ . "/../../templates/footer.html.php";
        
        $form = \ob_get_contents();

        $response->getBody()->write($form);
  
        \ob_clean();

        \ob_end_flush();

        return $response->withHeader('Content-Type', 'text/html');
    }  

    public function auth(Request $request, Response $response, $args){

        $email = \filter_input(INPUT_POST, 'email');
        $senha = \filter_input(INPUT_POST, 'senha');

        $login = new \Api\Login\ApiLogin();
        
        $response->getBody()->write($login->auth($email, $senha));
        return $response->withHeader('Content-Type', 'application/json');
    }
 }