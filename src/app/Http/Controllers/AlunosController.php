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


use App\Resources\Views\View;

class AlunosController
{

    public function home(Request $request, Response $response, array $args){
    
      $alunos = "";
      $alunos .= file_get_contents(__DIR__ . "/../../templates/header.html.php");
      $alunos .= file_get_contents(__DIR__ . "/../../templates/alunos.html.php");
      $alunos .= file_get_contents(__DIR__ . "/../../templates/footer.html.php");

      $response->getBody()->write($alunos);

      return $response->withHeader('Content-Type', 'text/html');
      
    }

    public function create(Request $request, Response $response, array $args) {

      $alunos = "";

      $alunos .= file_get_contents(__DIR__ . "/../../templates/header.html.php");
      $alunos .= file_get_contents(__DIR__ . "/../../templates/novoAluno.html.php");
      $alunos .= file_get_contents(__DIR__ . "/../../templates/footer.html.php");
       
      $response->getBody()->write($alunos);

      return $response->withHeader('Content-Type', 'text/html');

    }
}