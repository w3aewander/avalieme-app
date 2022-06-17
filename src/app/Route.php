<?php
/**
* Controle de rotas dinâmicas
* @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
*
*/

namespace App;

class Route {

    public static function openRoute($uri){

        function($uri){
        
            $route = $explode("/", $uri, 4);
            switch ( sizeof($route) ):
                case 2:
                    echo "controller: {$route[1]}";
                    break;
                case 3:
                    echo "controller: {$route[1]} - action: {$route[2]}";
                    break;
                case 4:
                    echo "controller: {$route[1]} - action: {$route[2]} - parâmetro: $route[3]";
                    break;
    
                default:
                echo "Nenhuma rota encontrada.";
            endswitch;        
        };
    }
} 

