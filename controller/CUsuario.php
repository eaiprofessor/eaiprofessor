<?php
require_once '../action/AUsuario.php';

# Classe responsável em trabalhar a lógica da aplicação

class CUsuario extends AUsuario{

    public function cadastrar(){
        echo $this->insert();
    }

    /*public function login(){
        $arrayUsuario = $this->select("email_usuario='{$this->getEmailUsuario()}' and senha_usuario='{$this->getSenhaUsuario()}'");
        return $arrayUsuario;
    }*/
}
