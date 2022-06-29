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

class AlunosController extends Controller
{

    public function __construct()
    {
      parent::__construct();
    }

    public function home(Request $request, Response $response, array $args){
    
      \ob_start();
  
      require_once  __DIR__ . "/../../templates/header.html.php";
      require_once __DIR__ . "/../../templates/alunos.html.php";
      require_once __DIR__ . "/../../templates/footer.html.php";

      $alunos = \ob_get_contents();

      \ob_clean(); 
      
      \ob_end_flush();
      
      $response->getBody()->write($alunos);
      
      return $response->withHeader('Content-Type', 'text/html');
      
    }

    public function create(Request $request, Response $response, array $args) {

      \ob_start();

      require_once __DIR__ . "/../../templates/header.html.php";
      require_once __DIR__ . "/../../templates/novoAluno.html.php";
      require_once __DIR__ . "/../../templates/footer.html.php";
      
      $alunos = \ob_get_contents();

      $response->getBody()->write($alunos);

      \ob_clean();

      \ob_end_flush();

      $response->withHeader('Content-Type', 'text/html');

      return $response;

    }
}