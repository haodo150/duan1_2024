<?php
    include_once "model/pdo.php";

    function order_add($id_user, $datetime_order, $quantity, $total){
        $sql = "INSERT INTO order (`id_user`, `datetime_order`, `quantity`, `total`) VALUES (?,?,?,?)";
        return pdo_insert($sql, $id_user, $datetime_order, $quantity, $total);
    }
?>