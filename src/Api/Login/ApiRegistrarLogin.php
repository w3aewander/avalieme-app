<?php
/**
 * @brief API Register login
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @version 1.0
 * 
 */

 namespace Api\Login;

 use Psr\Http\Message\ResponseInterface as Response;
 use Psr\Http\Message\ServerRequestInterface as Request;
 /**
  * Reliza o registro no sistema
  */
 class ApiRegistrarLogin {
    
    public function registrar(Request $request, Response $response){
              
        $data = $request->getParsedBody();
        $nome =  $data['nome'];    
        $email =  $data['email'];  
        $login =  $data['login'];  
        $senha =  $data['senha'];  
        $perfil_id = $data['perfil_id']; 
    
        $con = \Persistencia\Conexao::conexao();

        $sql  = " INSERT INTO usuarios (`nome`, `login`, `email`, `senha`, `perfil_id` ) ";
        $sql .= " VALUES(:nome, :login, :email, :senha, :perfil_id) ";

        $pstm = $con->prepare($sql);

        $hashSenha = password_hash($senha, PASSWORD_BCRYPT);

        $pstm->bindParam(':nome', $nome, \PDO::PARAM_STR);
        $pstm->bindParam(':login', $login, \PDO::PARAM_STR);
        $pstm->bindParam(':email', $email, \PDO::PARAM_STR);
        $pstm->bindParam(':senha', $hashSenha);
        $pstm->bindParam(':perfil_id', $perfil_id, \PDO::PARAM_INT);

        $isInserted =  $pstm->execute();

        $response->withHeader('Content-Type', 'application/json');
        $response->getBody()->write(json_encode(['success'=> $isInserted]));

        return $response ;

    }
 }