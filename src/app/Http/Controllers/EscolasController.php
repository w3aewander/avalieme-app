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

class EscolasController extends Controller
{
    private $view;

    
    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
      $this->view = new View; 
    }
    
    public function home(Request $request, Response $response, array $args){
    
      $alunos = "";

      $alunos = file_get_contents(__DIR__ . "/../../templates/header.html.php");
      $alunos .= file_get_contents(__DIR__ . "/../../templates/escolas.html.php");
      $alunos .= "<script src='js/alunos.js'></script>";
      $alunos .= file_get_contents(__DIR__ . "/../../templates/footer.html.php");
       
      $response->getBody()->write($alunos);

      return $response->withHeader('Content-Type', 'text/html');
      
    }

    public function create(Request $request, Response $response, array $args) {

        $escolas = "";

      $escolas = file_get_contents(__DIR__ . "/../../templates/header.html.php");
      $escolas .= file_get_contents(__DIR__ . "/../../templates/escolas.html.php");

      $escolas .= file_get_contents(__DIR__ . "/../../templates/footer.html.php");
       
      $response->getBody()->write($escolas);

      return $response->withHeader('Content-Type', 'text/html');

    }
}