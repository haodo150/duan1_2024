<?php
    include_once "model/pdo.php";
    function user_login($Email, $Password){
        $sql = "SELECT * FROM account_user WHERE Email=? AND Password=?";
        return pdo_getOne($sql, $Email, md5($Password));
    }

    
    function user_Email($Email){
        $sql = "SELECT * FROM account_user WHERE Email=?";
        $user = pdo_getOne($sql, $Email);
        return isset($user['id_user']);
        // if(isset($user['id_user'])) { // đã có tk
        //     return true;
        // }else{
        //     return false;
        // }
    }


    function user_register($Username, $Email, $Password) {
        $sql = "INSERT INTO account_user(`username`,`email`, `password`) VALUE (?,?,?)";
        pdo_execute($sql, $Username, $Email, md5($Password));

    }

    function user_getAll(){
        $sql = "SELECT * FROM account_user";
        return pdo_getAll($sql);
    }

    function user_count(){
        $sql = "SELECT COUNT(*) FROM account_user";
        return pdo_getValue($sql);
    }

    function users_search($keyword){
        $sql = 'SELECT * FROM `account_user` WHERE email LIKE "%'.$keyword.'%"';
        return pdo_getAll($sql);
    }
?>