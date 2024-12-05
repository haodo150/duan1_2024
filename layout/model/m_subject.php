<?php
    include_once "model/pdo.php";

    function subject_getAll()
    {
        $sql = "SELECT * FROM  categories";
        return pdo_getAll($sql);
    }
    function subject_count(){
        $sql = "SELECT COUNT(*) FROM categories";
        return pdo_getValue($sql);
    }
    function subject_countpage(){
        $sql =  "SELECT s.id_categories, cd.name_categories, COUNT(*) AS SoLuongGiay FROM products s INNER JOIN categories cd ON s.id_categories = cd.id_categories GROUP BY s.id_categories, cd.name_categories";
        return pdo_getAll($sql);
    }
?>