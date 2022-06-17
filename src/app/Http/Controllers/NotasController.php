<?php
/**
 * notasController
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */

namespace App\Http\Controllers;


use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;


class NotasController extends Controller {

    
    public function home(Request $request, Response $response, array $args){
    
      $notas = "";
      $notas .= file_get_contents(__DIR__ . "/../../templates/header.html.php");
      //$alunos .= file_get_contents(__DIR__ . "/../../templates/alunos.html.php");
      $notas .= file_get_contents(__DIR__ . "/../../templates/footer.html.php");

      $response->getBody()->write($notas);

      return $response->withHeader('Content-Type', 'text/html');
      
    }

    public function create(Request $request, Response $response, array $args) {

      $notas = "";

      $notas = file_get_contents(__DIR__ . "/../../templates/header.html.php");
      //$notas .= file_get_contents(__DIR__ . "/../../templates/notas.html.php");
      $notas .= file_get_contents(__DIR__ . "/../../templates/footer.html.php");
       
      $response->getBody()->write($notas);

      return $response->withHeader('Content-Type', 'text/html');

    }
}