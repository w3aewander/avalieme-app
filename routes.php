<?php
/**
 * Sistema de rotas
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @version 1.0
 * 
 */

namespace App {

use App\Controllers\HomeController;
use DI\Container;

use Psr\Container\ContainerInterface;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

use Api\Login\ApiLogin;

$app = AppFactory::create();     

//$login = new ApiLogin;
//$resp = $login->auth("wander.silva@gmail.com", "123456");
//echo json_decode($resp)->success;

$app->get("/login/auth", '\App\Http\Controllers\LoginController:index');
$app->post("/login/auth", '\App\Http\Controllers\LoginController:auth');
    
//Rota para HOME
$app->get("/",'\App\Http\Controllers\HomeController:home' );

//Rotas para escolas
$app->get("/escolas",'\App\Http\Controllers\EscolasController:home');

//Rotas para alunos
$app->get("/alunos",'\App\Http\Controllers\AlunosController:home');
$app->get("/aluno/novo",'\App\Http\Controllers\AlunosController:create');

//Rota para turmas
$app->get("/turmas",'\App\Http\Controllers\TurmasController:home');

//Rota para disciplinas
$app->get("/disciplinas",'\App\Http\Controllers\DisciplinasController:home');

//Rota para rubricas
$app->get("/rubricas",'\App\Http\Controllers\RubricasController:home');

//Rota para avaliacoes
$app->get("/avaliacoes",'\App\Http\Controllers\AvaliacoesController:home');

//Rota para notas
$app->get("/notas",'\App\Http\Controllers\NotasController:home');


//Rota para relatorios
$app->get("/relatorios",'\App\Http\Controllers\RelatoriosController:home');

//Rota para cep
$app->get("/cep",'\App\Http\Controllers\CepController:home');

//Rotas API
$app->get("/api/alunos/listar",'Api\Alunos\ApiAlunos:list');
$app->get("/api/menulateral/carregar",'Api\Menu\ApiMenuController:list');
$app->get("/api/escolas/listar",'Api\Escolas\ApiEscolas:list');

//Usuários
$app->post('/api/usuario/registrar', 'Api\Login\ApiRegistrarLogin:registrar');


$app->run();

}