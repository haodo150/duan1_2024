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
            $thongKe = history_income();
            $thongKeLoai = subject_countpage();
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
        // case 'brand':
        //     // Xử lý
        //     include_once "model/m_products.php";
        //     $brandList = loadTh_getAll();
        //     // Hiển thị
        //     include_once "view/v_admin_header.php";
        //     include_once "view/v_admin_brand.php";    
        //     break;
        case 'donhang':
            // Xử lý
            include_once "model/m_order.php";
            $donHang = donhang_getOn();
            // Hiển thị
            include_once "view/v_admin_header.php";
            include_once "view/v_admin_donhang.php";    
            break;
        case 'donhangDetail':
            // Xử lý
            include_once "model/m_order.php";
            $id_order = $_GET['id'];
            $history = donhangDetail_getbyId($id_order);
            $historyDetail = donhang_getDetailbyId($id_order);
            // print_r($historyDetail);
            // Hiển thị
            include_once "view/v_admin_header.php";
            include_once "view/v_admin_donhangDetail.php";    
            break;
        case 'updateOrderStatus':
            $status = $_GET['status'];
            $id_order = $_GET['id'];
            include_once "model/m_order.php";
            history_update($id_order, $status);
            header("Location: admin.php?mod=page&act=donhangDetail&id=$id_order");
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
        case "postSearchProduct":
            $keyword = $_POST['search'];
            include_once "model/m_products.php";
            $search = products_search($keyword);
            include_once "view/v_admin_header.php";
            include_once "view/v_admin_src_products.php";
            break;
        case "postSearchUser":
            $keyword = $_POST['search'];
            include_once "model/m_user.php";
            $search = users_search($keyword);
            include_once "view/v_admin_header.php";
            include_once "view/v_admin_src_user.php";
            break;
// ---------------------------------------------------------------------------------------------------
        case 'postUserAdd':
            include_once "view/v_admin_header.php";
            include_once "view/v_admin_useradd.php";


            include_once "model/m_accountUser.php";
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $role = isset($_POST['role']) ? $_POST['role'] : 0; 
                $result = user_register($username, $email, $password, $role);

                if ($result === true) {
                    echo "Người dùng đã được thêm thành công!";
                } else {
                    echo $result;
                }
            }
            break;
        case 'userUpdate':
            include_once "model/m_accountUser.php";
            $id_user = $_GET['id'] ?? null;
            
            // Kiểm tra xem ID có tồn tại hay không
            if (!$id_user) {
                echo "ID người dùng không hợp lệ.";
                break;
            }
            
            // Lấy thông tin người dùng từ cơ sở dữ liệu
            $user = user_getById($id_user);
            
            // Kiểm tra nếu không tìm thấy dữ liệu
            if (!$user || !is_array($user)) {
                echo "Không tìm thấy người dùng với ID: $id_user.";
                break;
            }
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $username = $_POST['username'] ?? '';
                $email = $_POST['email'] ?? '';
                $password = $_POST['password'] ?? '';
                $role = $_POST['role'] ?? 0;
            
                if ($username && $email && $password) {
                    // Mã hóa mật khẩu trước khi cập nhật
                    $hashedPassword = md5($password);
            
                    // Cập nhật thông tin người dùng
                    user_update($id_user, $username, $email, $hashedPassword, $role);
                    echo "Cập nhật thành công!";
                } else {
                    echo "Vui lòng điền đầy đủ thông tin.";
                }
            }
                include_once "view/v_admin_header.php";
                include_once "view/v_admin_userupdate.php";
                break;
        case 'userDelete':
            include_once "model/m_accountUser.php";
            $id_user = $_GET['id'] ?? null;
                
            if ($id_user) {
                // Gọi hàm xóa người dùng
                user_delete($id_user);
                echo "Xóa người dùng thành công!";
            } else {
                echo "ID người dùng không hợp lệ.";
            }
                
            // Chuyển hướng về danh sách người dùng
            header("Location: admin.php?mod=page&act=user");
            exit; // Kết thúc script sau khi chuyển hướng
        break;
 //----------------------------------------------------------------
        case 'categories':
            // Gọi model
            include_once "model/m_categories.php";
            
            // Lấy danh sách danh mục từ cơ sở dữ liệu
            $categoryList = category_getAll();
            
            // Hiển thị header và danh sách danh mục
            include_once "view/v_admin_header.php";
            include_once "view/v_admin_categorylist.php";    
            break;
        case 'categoryAdd':
            include_once "model/m_categories.php";
            // Kiểm tra và xử lý form submit
            if (isset($_POST['submit'])) {
                $name_categories = $_POST['name_categories'];
                $img = $_FILES['img'];  // Lấy thông tin ảnh từ form
                    
                // Gọi hàm thêm danh mục
                $result = category_add($name_categories, $img);
            
                // Hiển thị kết quả
                echo $result;
            }
            
            // Bao gồm các view để hiển thị form thêm danh mục
            include_once "view/v_admin_header.php";
            include_once "view/v_admin_categoryadd.php";  
            break;
        case 'categoryUpdate':
            include_once "model/m_categories.php";
            // Kiểm tra ID danh mục từ URL
            $id = $_GET['id'] ?? null;
            
            if ($id) {
                // Lấy thông tin danh mục từ cơ sở dữ liệu
                $category = category_getById($id);
                    
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $name_categories = $_POST['name_categories'];
                    $img = $_FILES['img'];  // Lấy ảnh mới nếu có
            
                    // Nếu người dùng chọn ảnh mới, tải lên và cập nhật
                    if ($img['name']) {
                        // Xử lý ảnh mới và cập nhật đường dẫn ảnh
                        $targetDir = "public/assets/img/";
                        $targetFile = $targetDir . basename($img["name"]);
            
                        if (move_uploaded_file($img["tmp_name"], $targetFile)) {
                            $imgPath = $targetFile; // Đường dẫn ảnh mới
                        } else {
                            echo "Có lỗi khi tải ảnh lên!";
                            break;
                        }
                    } else {
                        // Nếu không có ảnh mới, giữ nguyên ảnh cũ
                        $imgPath = $category['img'];
                    }
            
                    // Cập nhật danh mục vào cơ sở dữ liệu
                    category_update($id, $name_categories, $imgPath);
            
                    echo "Danh mục đã được cập nhật!";
                    header("Location: admin.php?mod=page&act=categories");
                    exit;
                }
            
                // Bao gồm view sửa danh mục
                include_once "view/v_admin_header.php";
                include_once "view/v_admin_categoryupdate.php";  
            } else {
                echo "ID danh mục không hợp lệ.";
            }
            break;
            case 'categoryDelete':
                include_once "model/m_categories.php";
                // Kiểm tra ID danh mục từ URL
                $id = $_GET['id'] ?? null;
            
                if ($id) {
                    // Gọi hàm xóa danh mục từ model
                    category_delete($id);
            
                    // Hiển thị thông báo và chuyển hướng về trang danh mục
                    echo "Danh mục đã được xóa thành công!";
                    header("Location: admin.php?mod=page&act=categories");
                    exit; // Dừng script sau khi chuyển hướng
                } else {
                    echo "ID danh mục không hợp lệ.";
                }
                break;

    }
} else{
    header("Location: ?mod=page&act=home");
}
?>