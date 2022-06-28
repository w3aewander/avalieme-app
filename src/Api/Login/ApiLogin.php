<?php
/**
* @brief API Login
* @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
* @version 1.0
*
*/


namespace Api\Login;

class ApiLogin  {


    private Bool $isAuth = FALSE;

    public function auth(String $email, String $senha){
        
        $con = \Persistencia\Conexao::conexao();

        $sql =  "SELECT * FROM usuarios WHERE email = ?";

        //Prepared Statement
        $pstm = $con->prepare($sql);

        $pstm->bindValue(1, $email, \PDO::PARAM_STR);
    
        if ( $pstm->execute() ) {
            $credentials = $pstm->fetch(\PDO::FETCH_OBJ);
            
            //die($credentials->senha);
            $hash_banco = $credentials->senha;

            if (password_verify($senha,  $hash_banco)) {
                
                $_SESSION['user_name'] = $credentials->nome;
                $_SESSION['user_login'] = $credentials->login;
                $_SESSION['user_email'] = $credentials->email;
                $_SESSION['user_profile'] = $credentials->perfil_id;
                $_SESSION['isAuthenticated'] = TRUE;

                $this->isAuth = TRUE;

                } else {
                
                $_SESSION['user_name'] = "";
                $_SESSION['user_login'] = "";
                $_SESSION['user_email'] = "";
                $_SESSION['user_profile'] = "";
                $_SESSION['isAuthenticated'] = FALSE;

                $this->isAuth = FALSE;

                }
        }

        return json_encode(['success'=>$this->isAuth], JSON_PRETTY_PRINT);
    }

}