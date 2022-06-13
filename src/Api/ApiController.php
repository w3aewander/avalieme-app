<?php
/** 
 * Api principal
 */

 namespace Api;

 class ApiController extends Controller {

    public function addAluno(){

       $dados = $_REQUEST['data'] ?? "Nada enviado";
       
       die(var_dump($dados));
    }
 }