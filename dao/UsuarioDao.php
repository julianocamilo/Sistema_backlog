<?php
/**
 * Created by PhpStorm.
 * User: Juliano
 * Date: 22/06/2015
 * Time: 20:17
 */
include "../helper/DataBase.php";

class UsuarioDao {

    public function login(Usuario $user) {
        $database = DataBase::getInstance();
        $database.connect();
        $query = "select * from usuario where email = '"+ $user.getEmail() +"'"
                        + " and senha = '"+ $user.getSenha() +"'";
        $result = mysql_query($sql, $database.getConnection());
        $cont = mysql_num_rows($result);
        if ( $cont == 1) {
            Session::create_session("user");
            while($users = mysql_fetch_array($result)) {
                $array =array("user" => $users["nome"], "permissao" => $users["tipo_permissao"]);
                Session::insert_value($array);
            }
        }
        return $cont == 1;
    }

}