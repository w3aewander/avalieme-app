<?php
/**
 * Alunos api
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */
 namespace Api\Escolas;

 use Psr\Http\Message\ResponseInterface as Response;
 use Psr\Http\Message\ServerRequestInterface as Request;
 use Slim\Factory\AppFactory;

 class ApiEscolas extends \Api\Controller {
 
    public function list( Request $request, Response $response, array $args ) {
 
        $data = file_get_contents(__DIR__ . "/../../data/escolas.json");
        $payload = $data; //json_encode($data);

        $response->getBody()->write($payload);
        return $response
                ->withHeader('Content-Type', 'application/json');
    }

}