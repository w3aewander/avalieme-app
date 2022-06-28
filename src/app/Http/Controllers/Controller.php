<?php
/**
 * Controlador default
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 *
 */

namespace App\Http\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

class Controller
{    
    public function __construct()
    {     
        if ( ! isset( $_SESSION['isAuthenticated'])){
            header("Location: /login/auth" );
            die();
        }
    }

}
