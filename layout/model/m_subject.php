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

?>