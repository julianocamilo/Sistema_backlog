<?php
/**
 * Created by PhpStorm.
 * User: Juliano
 * Date: 15/06/2015
 * Time: 20:54
 */

class Equipe implements ITemplate {
    private $id;
    private $nome;
    private $ativo;

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

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function setAtivo($ativo) {
        $this->ativo = $ativo;
    }
}