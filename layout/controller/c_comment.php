<?php
    if ($_GET['act']){
        switch ($_GET['act']) {
            case 'post-comment':
                $id_product = $_POST['id_product'];
                $content = $_POST['content'];
                $id_user = $_SESSION['user']['id_user'];
                include_once "./model/m_comment.php";
                comment_add($id_user, $id_product, $content);
                header("Location: ?mod=product&act=detail&id=$id_product");
               break;
        }
    } else {
        header("Location: ?mod=page&act=home");
    }
?>