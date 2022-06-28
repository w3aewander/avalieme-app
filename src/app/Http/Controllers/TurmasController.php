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

    public function __construct(){
      parent::__construct();
    }
    public function index() {
      $this->view = new View; 
    }
    
    public function home(Request $request, Response $response, array $args){
    
      \ob_start();

      require_once __DIR__ . "/../../templates/header.html.php";
      require_once  __DIR__ . "/../../templates/alunos.html.php";
      require_once __DIR__ . "/../../templates/footer.html.php";

      $turmas = \ob_get_contents();

      $response->getBody()->write($turmas);

      \ob_clean();

      \ob_end_flush();
      
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