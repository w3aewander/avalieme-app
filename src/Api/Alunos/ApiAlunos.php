<?php
/**
 * Alunos api
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */
 namespace Api\Alunos;

 use Psr\Http\Message\ResponseInterface as Response;
 use Psr\Http\Message\ServerRequestInterface as Request;
 use Slim\Factory\AppFactory;

 class ApiAlunos extends \Api\Controller {
 
    public function list( Request $request, Response $response, array $args ) {
 
        $data = file_get_contents(__DIR__ . "/../../data/alunos.json");
        $payload = $data; //json_encode($data);

        $response->getBody()->write($payload);
        return $response
                ->withHeader('Content-Type', 'application/json');
    }

}