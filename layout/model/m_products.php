<?php
    include_once "model/pdo.php";

    function loadSanpham(){
        $sql = 'SELECT * FROM products ORDER BY id_product';
        return pdo_getAll($sql);
    }
    
    function home_products_getById($id){
        $sql = "SELECT pd.* , cg.name_categories FROM products pd INNER JOIN categories cg ON pd.id_categories = cg.id_categories WHERE id_product=?";
        return pdo_getOne($sql, $id);
    }

    function load_getAll(){
        $sql = "SELECT p.*, c.name_categories FROM products p INNER JOIN categories c ON p.id_categories = c.id_categories";
        return pdo_getAll($sql);
    }

    function loadTh_getAll(){
        $sql = "SELECT * FROM categories";
        return pdo_getAll($sql);
    }

    function load_add($name_products, $price_products, $id_categories, $img){
        $sql = "INSERT INTO products (name_products, price_products, id_categories, img) 
            VALUES (?,?,?,?)";
        pdo_execute($sql, $name_products, $price_products, $id_categories, $img);
    }

    function load_update($id_product, $name_products, $price_products, $id_categories, $img){
        $sql ="UPDATE products SET name_products=?, price_products=?, id_categories=?, img = ? WHERE id_product=?";
        pdo_execute($sql, $name_products, $price_products, $id_categories, $img, $id_product);
    }

    function load_delete($id_product){
        $sql = "DELETE FROM products WHERE id_product=?";
        pdo_execute($sql, $id_product);
    }

    function soluong_count(){
        $sql = "SELECT COUNT(*) FROM products";
        return pdo_getValue($sql);  
    }

    function products_search($keyword){
        $sql = 'SELECT * FROM `products` WHERE name_products LIKE "%'.$keyword.'%"';
        return pdo_getAll($sql);
    }


?>