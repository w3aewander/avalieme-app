<?php
/**
 * TurmasController
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */

namespace App\Http\Controllers;


use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;


class TurmasController extends Controller {

    public function index() {
      $this->view = new View; 
    }
    
    public function home(Request $request, Response $response, array $args){
    
      $turmas = "";
      $turmas .= file_get_contents(__DIR__ . "/../../templates/header.html.php");
      //$alunos .= file_get_contents(__DIR__ . "/../../templates/alunos.html.php");
      $turmas .= file_get_contents(__DIR__ . "/../../templates/footer.html.php");

      $response->getBody()->write($turmas);

      return $response->withHeader('Content-Type', 'text/html');
      
    }

    public function create(Request $request, Response $response, array $args) {

      $turmas = "";

      $turmas = file_get_contents(__DIR__ . "/../../templates/header.html.php");
      //$turmas .= file_get_contents(__DIR__ . "/../../templates/turmas.html.php");
      $turmas .= file_get_contents(__DIR__ . "/../../templates/footer.html.php");
       
      $response->getBody()->write($turmas);

      return $response->withHeader('Content-Type', 'text/html');

    }
}