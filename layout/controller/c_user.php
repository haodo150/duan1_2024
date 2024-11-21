<?php
    
    if ($_GET['act']){
        switch ($_GET['act']) {
            case 'login':
                // Hiển thị
                include_once "view/header.php";
                include_once "view/login.php";
                include_once "view/footer.php";
                break;
            case 'post-login':
                // Xử lý
                $Email = $_POST['Email'];
                $Password = $_POST['Password'];
                include_once "model/m_user.php";
                $user = user_login($Email, $Password);

                if(isset($user['id_user'])){
                    echo "Login Success!";
                    unset($user['password']);
                    $_SESSION['user'] = $user;
                    header("Location: ?mod=page&act=home");
                } else {
                    $_SESSION['alert'] = "Wrong email or password!";
                    header("Location: ?mod=user&act=login");
                }
                break;
            case 'logout':
                unset($_SESSION['user']);
                header("Location: ?mod=page&act=home");
                break;
            case 'register':
            // Hiển thị
            include_once "view/header.php";
            include_once "view/register.php";
            include_once "view/footer.php";
            break;

            case 'post-register':
                // Xử lý đăng ký
                $Username = $_POST['Username'];
                $Email = $_POST['Email'];
                $Password = $_POST['Password'];
                include_once "model/m_user.php";
                // Kiểm tra email có tồn tại chưa
                //  có rồi báo lỗi
                if(user_Email($Email)){
                    $_SESSION['alert'] = "Email đã tồn tại vui lòng nhập Email khác!";
                    header("Location: ?mod=user&act=register");
                    }else{
                    // Chưa có thì cho đk
                    user_register($Username, $Email, $Password);
                    header('Location: ?mod=user&act=login');
                    }
                    break;

            default:
                # code...
                break;
        }
    } else {
        header("Location: ?mod=page&act=home");
    }

?>