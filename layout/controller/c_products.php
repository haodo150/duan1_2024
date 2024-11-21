<?php
    if ($_GET['act']){
        switch ($_GET['act']) {
            case 'detail':
                // Xử lý

                // Hiển thị
                include_once "view/header.php";
                include_once "view/detail.php";
                include_once "view/footer.php";
                break;
                 
            default:
                # code...
                break;
        }
    } else {
        header("Location: ?mod=page&act=home");
    }
?>