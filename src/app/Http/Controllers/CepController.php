<?php
/**
 * AlunoController
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */

namespace App\Http\Controllers;


use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

class CepController extends Controller
{
    
    public function __construct(){
      parent::__construct();
    }
   
    public function home(Request $request, Response $response, array $args){
    
      $cep = "";
      $cep .= file_get_contents(__DIR__ . "/../../templates/header.html.php");
      $cep .= file_get_contents(__DIR__ . "/../../templates/cep.html.php");
      $cep .= file_get_contents(__DIR__ . "/../../templates/footer.html.php");

      $response->getBody()->write($cep);

      return $response->withHeader('Content-Type', 'text/html');
      
    }

    public function create(Request $request, Response $response, array $args) {

        $cep = "";

      $cep = file_get_contents(__DIR__ . "/../../templates/header.html.php");
      $cep .= file_get_contents(__DIR__ . "/../../templates/cep.html.php");
      $cep .= file_get_contents(__DIR__ . "/../../templates/footer.html.php");
       
      $response->getBody()->write($cep);

      return $response->withHeader('Content-Type', 'text/html');

    }
}