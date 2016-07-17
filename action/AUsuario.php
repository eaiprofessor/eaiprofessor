<?php
require_once '../model/MUsuario.php';


class AUsuario  extends MUsuario{

    protected $sqlInsert = "insert into usuario (tipo_usuario,status_usuario,email_usuario, senha_usuario, imagem_perfil, nome_usuario, cpf_usuario, data_cadastro)
                                                 values('%s','%s','%s','%s','%s','%s','%s', NOW())";

    /*protected $sqlSelect = "select *, date_format (data_criacao_usuario, '%s') as data_criacao_usuario from usuario where 1=1  %s %s";
    protected $sqlUpdate = "update usuario set email_usuario = '%s', senha_usuario ='%s', status_usuario='%s', data_criacao_usuario='%s'
                                                    where cod_usuario='%s'";

    protected $sqlDelete = "delete from usuario where cod_usuario='%s'";
    */

    public function insert(){
        $sql = sprintf
        ($this->sqlInsert,
            $this->getTipoUsuario(),
            $this->getStatusUsuario(),
            $this->getEmailUsuario(),
            $this->getSenhaUsuario(),
            $this->getImagemPerfil(),
            $this->getNomeUsuario(),
            $this->getCpfUsuario()
        );
        return $this->runQuery($sql);
    }

    /*
    public function update(){
        $sql = sprintf($this->sqlUpdate,
                $this->getEmailUsuario(),
                $this->getSenhaUsuario(),
                $this->getStatusUsuario(),
                $this->getDataCriacaoUsuario(),
                $this->getCodUsuario());
        return $this->runQuery($sql);
    }

    public function delete(){
        $sql = sprintf($this->sqlDelete,
                $this->getCodUsuario());
                return $this->runQuery($sql);
    }

    public function select($where='', $order='') {
        $sql = sprintf($this->sqlSelect,'%d/%m/%Y %H:%i:%s',$where,$order);
        return $this->runSelect($sql);

    }

    */
}

