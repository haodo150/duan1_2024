<?php
    include_once "model/pdo.php";

    function order_add($id_user, $quantity, $total, $fullname, $address, $city, $phone, $email, $note, $datetime, $status){
        $sql = "INSERT INTO `order` (`id_user`, `quantity`, `total`, `fullname`, `address`, `city`, `phone`, `email`, `note`, `datetime`, `status`) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);
";
        return pdo_insert($sql, $id_user, $quantity, $total, $fullname, $address, $city, $phone, $email, $note, $datetime, $status);
    }

    function order_addDetail($id_order, $id_products, $quantity){
        $sql = "INSERT INTO order_details(`id_order`, `id_products`, `quantity`) VALUES (?,?,?)";
        pdo_execute($sql, $id_order, $id_products, $quantity);
    }

    function order_count(){
        $sql = "SELECT COUNT(*) FROM `order`";
        return pdo_getValue($sql);
    }

    function history_income(){
        $sql = "SELECT YEAR(datetime) AS Nam, MONTH(datetime) AS Thang, SUM(total) AS DoanhThu FROM `order` GROUP BY YEAR(datetime), MONTH(datetime) ORDER BY YEAR(datetime) ASC, MONTH(datetime) ASC;";
        return pdo_getAll($sql);
    }

    function donhang_getOn(){
        $sql = "SELECT ls.*, tk.username FROM `order` ls INNER JOIN account_user tk ON ls.id_user = tk.id_user";
        return pdo_getAll($sql);
    }

    function donhangDetail_getbyId($id_order){
        $sql = "SELECT ls.*, tk.username FROM `order` ls INNER JOIN account_user tk ON ls.id_user = tk.id_user WHERE ls.id_order = ?";
        return pdo_getAll($sql, $id_order);
    }

    function donhang_getDetailbyId($id_order){
       $sql = "SELECT ct.*, s.name_products, s.img FROM order_details ct 
       INNER JOIN products s ON ct.id_products = s.id_product WHERE ct.id_order = ?";
       return pdo_getAll($sql, $id_order);
    }

    function history_update($id_order, $status){
        $sql = "UPDATE `order` SET `status` = ? WHERE id_order = ? ";
        pdo_execute($sql, $status, $id_order);
    }

?>  