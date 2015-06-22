<?php
/**
 * Created by PhpStorm.
 * User: Juliano
 * Date: 15/06/2015
 * Time: 20:51
 */

class Usuario implements ITemplate {
    private $id;
    private $ativo;
    private $nome;
    private $email;
    private $senha;
    private $telefone;
    private $tipo_permissao;

    public function save() {
        // TODO: Implement save() method.
    }

    public function remove() {
        // TODO: Implement remove() method.
    }

    public function find($object) {
        // TODO: Implement find() method.
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getTipoPermissao() {
        return $this->tipo_permissao;
    }

    public function setTipoPermissao($tipo_permissao) {
        $this->tipo_permissao = $tipo_permissao;
    }


}