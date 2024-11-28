<?php
    include_once "model/pdo.php";

    function loadSanpham(){
        $sql = 'SELECT * FROM products ORDER BY id_product LIMIT 12';
        return pdo_getAll($sql);
    }
    
    function home_products_getById($id){
        $sql = "SELECT pd.* , cg.name_categories FROM products pd INNER JOIN categories cg ON pd.id_categories = cg.id_categories WHERE id_product=?";
        return pdo_getOne($sql, $id);
    }
?>