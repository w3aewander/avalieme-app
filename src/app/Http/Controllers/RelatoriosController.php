<?php
/**
 * RelatoriosController
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */

namespace App\Http\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;


class RelatoriosController extends Controller {

    public function __construct() {
      parent::__construct();
    }
    public function home(Request $request, Response $response, array $args){
    
      
      \ob_start();

      require_once __DIR__ . "/../../templates/header.html.php";
      require_once __DIR__ . "/../../templates/alunos.html.php";
      require_once __DIR__ . "/../../templates/footer.html.php";

      $relatorios = \ob_get_contents();

      $response->getBody()->write($relatorios);

      \ob_clean();

      \ob_end_flush();
      
      return $response->withHeader('Content-Type', 'text/html');
      
    }

    public function create(Request $request, Response $response, array $args) {

      $relatorios = "";

      $relatorios = file_get_contents(__DIR__ . "/../../templates/header.html.php");
      //$relatorios .= file_get_contents(__DIR__ . "/../../templates/relatorios.html.php");
      $relatorios .= file_get_contents(__DIR__ . "/../../templates/footer.html.php");
       
      $response->getBody()->write($relatorios);

      return $response->withHeader('Content-Type', 'text/html');

    }
}