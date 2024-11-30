<?php
include_once 'model/pdo.php';

function comment_add($id_user, $id_product, $content)
{
    $sql = "INSERT INTO comment(`id_user`,`id_product`,`content`) VALUE (?,?,?)
    ";
    pdo_execute($sql, $id_user, $id_product, $content);
}

function comment_getByBook($id_product)
{
    $sql = "SELECT cn.*, tk.username FROM comment cn INNER JOIN account_user tk ON cn.id_user
    = tk.id_user WHERE id_product=? ORDER BY date_time DESC";
    return pdo_getAll($sql, $id_product);
}
function cmt_count(){
    $sql = "SELECT COUNT(*) FROM comment";
    return pdo_getValue($sql);
}
?>