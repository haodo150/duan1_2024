<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'dashboard':
            // Xử lý
            include_once "model/m_products.php";
            $soGiay = soluong_count();  
            include_once "model/m_subject.php";
            $soChuDe = subject_count();
            include_once "model/m_comment.php";
            $soBinhLuan = cmt_count();
            include_once "model/m_user.php";
            $soTaiKhoan = user_count();
            include_once "model/m_order.php";
            $soDonHang = order_count();
            // Hiển thị
            include_once "view/v_admin_header.php";
            include_once "view/v_admin_page.php";
            break;
        case 'product':
            // Xử lý
            include_once "model/m_products.php";
            $loadList = load_getAll();
            // Hiển thị
            include_once "view/v_admin_header.php";
            include_once "view/v_admin_product.php";    
            break;
        case 'user':
            // Xử lý
            include_once "model/m_user.php";
            $userList = user_getAll();
            // Hiển thị
            include_once "view/v_admin_header.php";
            include_once "view/v_admin_user.php";    
        break;
        case 'brand':
            // Xử lý
            include_once "model/m_products.php";
            $brandList = loadTh_getAll();
            // Hiển thị
            include_once "view/v_admin_header.php";
            include_once "view/v_admin_brand.php";    
            break;
        case 'donhang':
            // Xử lý
            
            // Hiển thị
            include_once "view/v_admin_header.php";
            include_once "view/v_admin_donhang.php";    
            break;

        case 'add':
            // Xử lý
            include_once "model/m_subject.php";
            $subjectList = subject_getAll();
            // Hiển thị
            include_once "view/v_admin_header.php";
            include_once "view/v_admin_add.php";    
            break;
        case 'postAdd':
            $name_products = $_POST['name_products'];
            $price_products = $_POST['price_products'];
            $id_categories = $_POST['id_categories'];
            if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
                $fileName = rand(1000000, 9999999) . $_FILES['img']['name'];
                if (move_uploaded_file($_FILES['img']['tmp_name'], "public/assets/img/$fileName")) {
                    $img = "public/assets/img/$fileName";
                }

            }
            
            include_once "model/m_products.php";
            load_add($name_products, $price_products, $id_categories, $img);
            $_SESSION['alert'] = "Da them san pham moi";
            header("Location: admin.php?mod=page&act=product");   
            break;
        case 'update':
            // Xử lý
            include_once "model/m_products.php";
            $id_product = $_GET['id'];
            $home_products = home_products_getById($id_product);
            include_once "model/m_subject.php";
            $subjectList = subject_getAll();
            // Hiển thị
            include_once "view/v_admin_header.php";
            include_once "view/v_admin_update.php";    
            break;
        case 'postUpdate':
            $id_product = $_POST['id_product'];
            $name_products = $_POST['name_products'];
            $price_products = $_POST['price_products'];
            $id_categories = $_POST['id_categories'];
            
            if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
                $fileName = rand(1000000, 9999999) . $_FILES['img']['name'];
                if (move_uploaded_file($_FILES['img']['tmp_name'], "public/assets/img/$fileName")) {
                    $img = "public/assets/img/$fileName";
                } else {
                    $img = isset($_POST['imgHienTai']) ? $_POST['imgHienTai'] : "";
                }
            } else {
                $img = isset($_POST['imgHienTai']) ? $_POST['imgHienTai'] : "";
            }
            
            include_once "model/m_products.php";
            load_update($id_product, $name_products, $price_products, $id_categories, $img);
            $_SESSION['alert'] ="Cap nhat thanh cong";
            header("Location: admin.php?mod=page&act=update&id=" .$id_product);
            break;
        case "delete":
            include_once "model/m_products.php";
            load_delete($_GET['id']);
            $_SESSION['alert'] = "Da xoa thanh cong!";
            header("Location: admin.php?mod=page&act=product");
            break;
    }
} else{
    header("Location: ?mod=page&act=home");
}
?>