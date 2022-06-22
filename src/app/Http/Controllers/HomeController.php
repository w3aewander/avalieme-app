<?php
/**
 * HomeController
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */

namespace App\Http\Controllers;


use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;


use App\Resources\Views\View;

class HomeController
{
    private $view;

    
    public function __construct()
    {
        $this->view = new View;
        return "adfs";
    }

    public function index() {
      $this->view = new View; 
    }
    
    public function home(Request $request, Response $response, array $args){
    
      $alunos = "";

      $alunos = file_get_contents(__DIR__ . "/../../templates/header.html.php");
      $alunos .= file_get_contents(__DIR__ . "/../../templates/index.html.php");
      $alunos .= file_get_contents(__DIR__ . "/../../templates/footer.html.php");
       
      $response->getBody()->write($alunos);

      return $response->withHeader('Content-Type', 'text/html');
      
    }
}