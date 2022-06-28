<?php
/**
 * @brief API Register login
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @version 1.0
 * 
 */


 /**
  * Reliza o registro no sistema
  */
 class ApiRegistrarLogin {
    
    public function registrar(){
        
        $dados =  $_POST;
        $nome  =  filter_input(POST, 'nome');
        $email =  $_POST['email'];
        $login =  $_POST['login'];
        $senha =  $_POST['senha'];
        $perfil = $_POST['perfil'];
    
        $con = \Persistencia\Conexao::conexao();

        $sql  = " INSERT INTO usuarios (`nome`, `login`, `email`, `senha`, `perfil_id` ) ";
        $sql .= " VALUES(:nome, :login, :email, :senha, :perfil_id) ";

        $pstm = $con->prepare($sql);

        $pstm->bindParam(1, $nome, \PDO::PARAM_STR);
        $pstm->bindParam(2, $login, \PDO::PARAM_STR);
        $pstm->bindParam(3, $email, \PDO::PARAM_STR);
        $pstm->bindParam(4, $senha);
        $pstm->bindParam(5, $perfil_id, \PDO::PARAM_INT);

        $isInserted =  $pstm->execute();

        return $isInserted ;

    }
 }