<?php
    $baseURL = 'http://localhost/duan1n1-2024/layout/';
    session_start();
    if (isset($_GET['mod'])) {
        # code...
        switch ($_GET['mod']) {
            case 'page':
                include_once "controller/c_page.php";
                break;
            case 'user':
                include_once "controller/c_user.php";
                break;
            case 'product':
                include_once "controller/c_product.php";
            default:
                # code...
                break;
        }
    } else {
        header("Location: ?mod=page");
    }
?>