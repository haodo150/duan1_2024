<?php
    include_once "model/pdo.php";

    function home_category(){
        // Lấy toàn bô danh mục trong csdl
        $sql = 'SELECT * FROM categories';
        return pdo_getAll($sql);
    }

    function home_products_featured(){
        // Lấy 8 sản phẩm trong csdl
        $sql = 'SELECT * FROM products ORDER BY id_product DESC LIMIT 8';
        return pdo_getAll($sql);
    }

    function home_products_populer(){
        // Lấy 8 sản phẩm trong csdl
        $sql = 'SELECT * FROM products ORDER BY id_product DESC LIMIT 8';
        return pdo_getAll($sql);
    }

    function home_products_added(){
        // Lấy 8 sản phẩm trong csdl
        $sql = 'SELECT * FROM products ORDER BY id_product DESC LIMIT 8';
        return pdo_getAll($sql);
    }

    function home_products_arrival(){
        // Lấy 8 sản phẩm trong csdl
        $sql = 'SELECT * FROM products ORDER BY id_product DESC LIMIT 8';
        return pdo_getAll($sql);
    }

    function home_products_getById($id){
        $sql = "SELECT pd.* , cg.name_categories FROM products pd INNER JOIN categories cg ON pd.id_categories = cg.id_categories WHERE id_product=?";
        return pdo_getOne($sql, $id);
    }
?>