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
    
      \ob_start();
      
      include_once  __DIR__ . "/../../templates/header.html.php";
      include_once __DIR__ . "/../../templates/escolas.html.php";  
      /* $escolas = "<script src='js/alunos.js'></script>"; */
      include_once __DIR__ . "/../../templates/footer.html.php";

      $escolas = \ob_get_contents();

      \ob_clean(); 
      
      \ob_end_flush();
      
      $response->getBody()->write($escolas);

      return $response->withHeader('Content-Type', 'text/html');
      
    }

    public function create(Request $request, Response $response, array $args) {

      \obs_start();

      require_once __DIR__ . "/../../templates/header.html.php";
      require_once __DIR__ . "/../../templates/escolas.html.php";
      require_once __DIR__ . "/../../templates/footer.html.php";
      
      $escolas = \ob_get_contents();
      
      \ob_clean();

      \ob_end_clean();

      $response->getBody()->write($escolas);

      return $response->withHeader('Content-Type', 'text/html');

    }
}