<?php
/**
 * Camada de persistência - responsável pela conexão com o banco de dados.
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @version 1.0
 */

namespace Persistencia;

use PDO;
use Dotenv;

 class Conexao  {

    private static $con;

    private static function obterEnvConfig(){
        $dotenv = \Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . "/../../");
        $dotenv->load();
     }

    /**
     * Retorna uma conexão
     */
    public static function conexao(){

        self::obterEnvConfig();

        //dsn = data source name - origem da fonte de dados.
        $dsn = getEnv('dsn');
        $user = getEnv('db_user');
        $pass = getEnv('db_pass');

        //Aplicando o Singleton
        if ( self::$con ){
                return self::$con;
        } else {
             self::$con = new \PDO($dsn, $user, $pass, 
                              [
                                PDO::ATTR_PERSISTENT => TRUE, 
                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                            ]);
            return self::$con;               
        }
    }
 };
