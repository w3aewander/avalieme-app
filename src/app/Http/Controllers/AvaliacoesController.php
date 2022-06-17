<?php
/**
 * avaliacoesController
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */

 namespace App\Http\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;


class AvaliacoesController extends Controller {

    
    public function home(Request $request, Response $response, array $args){
    
      $avaliacoes = "";
      $avaliacoes .= file_get_contents(__DIR__ . "/../../templates/header.html.php");
      //$alunos .= file_get_contents(__DIR__ . "/../../templates/alunos.html.php");
      $avaliacoes .= file_get_contents(__DIR__ . "/../../templates/footer.html.php");

      $response->getBody()->write($avaliacoes);

      return $response->withHeader('Content-Type', 'text/html');
      
    }

    public function create(Request $request, Response $response, array $args) {

      $avaliacoes = "";

      $avaliacoes = file_get_contents(__DIR__ . "/../../templates/header.html.php");
      //$avaliacoes .= file_get_contents(__DIR__ . "/../../templates/avaliacoes.html.php");
      $avaliacoes .= file_get_contents(__DIR__ . "/../../templates/footer.html.php");
       
      $response->getBody()->write($avaliacoes);

      return $response->withHeader('Content-Type', 'text/html');

    }
}