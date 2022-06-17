<?php
/**
 * Alunos api
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */
 namespace Api\Menu;

 use Psr\Http\Message\ResponseInterface as Response;
 use Psr\Http\Message\ServerRequestInterface as Request;
 use Slim\Factory\AppFactory;

 class ApiMenuController extends \Api\Controller {
 
    public function list( Request $request, Response $response, array $args ) {
 
        $data = file_get_contents(__DIR__ . "/../../data/menu.json");
        $payload = $data; //json_encode($data);

        $response->getBody()->write($payload);
        return $response
                ->withHeader('Content-Type', 'application/json');
    }

}