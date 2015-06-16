<?php
class Chamado implements ITemplate {
    private $id;
    private $descricao;
    private $id_colaborativo;
    private $unidade_de_atendimento;

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

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getIdColaborativo() {
        return $this->id_colaborativo;
    }

    public function setIdColaborativo($id_colaborativo) {
        $this->id_colaborativo = $id_colaborativo;
    }

    public function getUnidadeDeAtendimento() {
        return $this->unidade_de_atendimento;
    }

    public function setUnidadeDeAtendimento($unidade_de_atendimento) {
        $this->unidade_de_atendimento = $unidade_de_atendimento;
    }
}