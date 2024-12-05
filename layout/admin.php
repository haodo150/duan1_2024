<?php
    $baseURL = 'http://localhost/duan1_2024/layout/';
    session_start();
    if (isset($_GET['mod'])) {
        # code...
        switch ($_GET['mod']) {
            case 'page':
                include_once "controller/c_admin_page.php";
                break;
            case 'user':
                include_once "controller/c_admin_user.php";
                break;
            case 'product':
                include_once "controller/c_admin_products.php";
                break;
            case 'add':
                include_once "controller/c_admin_page.php";
                break;
            case 'update':
                include_once "controller/c_admin_page.php";
                break;
            case 'comment':
                include_once "controller/c_admin_comment.php";
            default:
                # code...
                break;
        }
    } else {
        header("Location: ?mod=page");
    }
?>