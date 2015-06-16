<?php
/**
 * Created by PhpStorm.
 * User: Juliano
 * Date: 15/06/2015
 * Time: 20:39
 */

interface ITemplate {
    public function save();
    public function remove();
    public function find($object);
}