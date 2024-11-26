<?php
    include_once "model/pdo.php";

    function home_category(){
        // Lấy toàn bô danh mục trong csdl
        $sql = 'SELECT * FROM categories';
        return pdo_getAll($sql);
    }
    function home_products_featured(){
        // Lấy 8 sản phẩm trong csdl
        $sql = 'SELECT * FROM products WHERE id_categories = 1 LIMIT 8';
        return pdo_getAll($sql);
    }

    function home_products_populer(){
        // Lấy 8 sản phẩm trong csdl
        $sql = 'SELECT * FROM products WHERE id_categories = 2 LIMIT 8';
        return pdo_getAll($sql);
    }

    function home_products_added(){
        // Lấy 8 sản phẩm trong csdl
        $sql = 'SELECT * FROM products WHERE id_categories = 3 LIMIT 8';
        return pdo_getAll($sql);
    }
    function home_products_arrival(){
        // Lấy 8 sản phẩm trong csdl
        $sql = 'SELECT * FROM products ORDER BY id_product DESC LIMIT 8';
        return pdo_getAll($sql);
    }
    

    
?>