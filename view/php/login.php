<?php
/**
 * Created by PhpStorm.
 * User: Juliano
 * Date: 22/06/2015
 * Time: 19:59
 */
    include "../../model/Usuario.php";
    include "../../dao/UsuarioDao.php";

    $email = $_POST["usuario"];
    $password = $_POST["senha"];
    $user = new Usuario();
    $user.setSenha($password);
    $user.setEmail($email);
    $userDao = new UsuarioDao();

    if ($userDao.login($user)) {
        header('Location: ../home.php');
    } else {
        header('Location: ../index.html');
    }

?>