<?php
/**
 * Created by PhpStorm.
 * User: Juliano
 * Date: 15/06/2015
 * Time: 20:49
 */

class Estado implements ITemplate {
    private $nome;
    private $slug;

    public function save() {
        // TODO: Implement save() method.
    }

    public function remove() {
        // TODO: Implement remove() method.
    }

    public function find($object) {
        // TODO: Implement find() method.
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSlug() {
        return $this->slug;
    }

    public function setSlug($slug) {
        $this->slug = $slug;
    }
}