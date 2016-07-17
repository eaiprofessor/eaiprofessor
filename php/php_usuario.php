<?php

print_r($_POST);

/*Array
(
    [action] => cadastrar_usuario
    [status_usuario] => 1
    [tipo_usuario] => 1
    [email_usuario] =>
    [cpf_usuario] =>
    [senha_usuario] =>
)*/
include_once '../controller/CUsuario.php';
$usuario = new CUsuario();

$acao = $_POST['action'];


switch($acao){
    case 'cadastrar_usuario':
        $usuario->setTipoUsuario($_POST['tipo_usuario']);
        $usuario->setStatusUsuario(1);
        $usuario->setEmailUsuario($_POST['email_usuario']);
        $usuario->setSenhaUsuario($_POST['senha_usuario']);
        $usuario->setImagemPerfil('fazer dps');
        $usuario->setNomeUsuario($_POST['nome_usuario']);
        $usuario->setCpfUsuario($_POST['cpf_usuario']);
        echo $usuario->insert();
        break;
}