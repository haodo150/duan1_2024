<?php
    include_once "model/pdo.php";

    function order_add($id_user, $quantity, $total, $fullname, $address, $city, $phone, $email, $note, $datetime, $status){
        $sql = "INSERT INTO `order` (`id_user`, `quantity`, `total`, `fullname`, `address`, `city`, `phone`, `email`, `note`, `datetime`, `status`) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);
";
        return pdo_insert($sql, $id_user, $quantity, $total, $fullname, $address, $city, $phone, $email, $note, $datetime, $status);
    }

    function order_addDetail($id_order, $id_products, $quantity){
        $sql = "INSERT INTO orderdetails(`id_order`, `id_products`, `quantity`) VALUES (?,?,?)";
        pdo_execute($sql, $id_order, $id_products, $quantity);
    }

    function order_count(){
        $sql = "SELECT COUNT(*) FROM `order`";
        return pdo_getValue($sql);
    }
?>