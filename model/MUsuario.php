<?php

include_once 'dbConnection.php';

/**
 * Created by PhpStorm.
 * User: igorc
 * Date: 17/07/2016
 * Time: 13:53
 */
class MUsuario extends DbConnection
{
    private $cod_usuario;
    private $tipo_usuario;
    private $status_usuario;
    private $email_usuario;
    private $senha_usuario;
    private $data_cadastro;
    private $imagem_perfil;
    private $nome_usuario;
    private $cpf_usuario;

    public function getCodUsuario()
    {
        return $this->cod_usuario;
    }

    public function setCodUsuario($cod_usuario)
    {
        $this->cod_usuario = $cod_usuario;
    }

    public function getTipoUsuario()
    {
        return $this->tipo_usuario;
    }

    public function setTipoUsuario($tipo_usuario)
    {
        $this->tipo_usuario = $tipo_usuario;
    }

    public function getStatusUsuario()
    {
        return $this->status_usuario;
    }

    public function setStatusUsuario($status_usuario)
    {
        $this->status_usuario = $status_usuario;
    }

    public function getEmailUsuario()
    {
        return $this->email_usuario;
    }

    public function setEmailUsuario($email_usuario)
    {
        $this->email_usuario = $email_usuario;
    }

    public function getSenhaUsuario()
    {
        return $this->senha_usuario;
    }

    public function setSenhaUsuario($senha_usuario)
    {
        $this->senha_usuario = $senha_usuario;
    }

    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }

    public function setDataCadastro($data_cadastro)
    {
        $this->data_cadastro = $data_cadastro;
    }

    public function getImagemPerfil()
    {
        return $this->imagem_perfil;
    }

    public function setImagemPerfil($imagem_perfil)
    {
        $this->imagem_perfil = $imagem_perfil;
    }

    public function getNomeUsuario()
    {
        return $this->nome_usuario;
    }

    public function setNomeUsuario($nome_usuario)
    {
        $this->nome_usuario = $nome_usuario;
    }

    public function getCpfUsuario()
    {
        return $this->cpf_usuario;
    }

    public function setCpfUsuario($cpf_usuario)
    {
        $this->cpf_usuario = $cpf_usuario;
    }


}