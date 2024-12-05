<?php
    if ($_GET['act']){
        switch ($_GET['act']) {
            case 'detail':
                // Xử lý
                include_once "model/m_products.php";
                $productDetail = home_products_getById($_GET['id']);
                include_once "./model/m_comment.php";
                $commentList = comment_getByBook($_GET['id']);
                // Hiển thị
                include_once "view/header.php";
                include_once "view/detail.php";
                include_once "view/footer.php";
                break;
            case 'cart':
                // Xử lý
                if(!isset($_SESSION['cart'])){
                    $_SESSION['cart'] = [];
                }
                $cart = $_SESSION['cart'];
                include_once "model/m_products.php";
                foreach($cart as &$products){
                  $detail = home_products_getById($products['id_product']);
                  $products['name_products'] = $detail['name_products'];
                  $products['img'] = $detail['img'];
                  $products['price_products'] = $detail['price_products'];
                  $products['subtotal'] = $products['price_products'] * $products['quantity'];
                } 
                // Hiển thị
                include_once "view/header.php";
                include_once "view/cart.php";
                include_once "view/footer.php";
                break;

            case 'addToCart':
                // Tạo ra giỏ hàng nếu chưa có
                if(!isset($_SESSION['cart'])){
                    $_SESSION['cart'] = [];
                }
                $id_product =$_GET['id'];
                $inCart=false; // giả xử chưa có trong giỏ
               
                foreach($_SESSION['cart'] as &$products){
                    if($products['id_product'] == $id_product ){
                          // th1: đã có trong giỏ -> tăng số lương

                          $products['quantity']++;
                          
                          $inCart=true;
                          break;
                    }
                }
                //th2: chưa có thêm vào với số lượng =1
                if (!$inCart) {
                    array_push($_SESSION['cart'], 
                    [
                        'id_product' => $id_product,
                        'quantity' => 1 
                    ]);
                }
                $_SESSION['alert'] = "Đã thêm vào giỏ";
                header("Location: ?mod=product&act=detail&id=$id_product");

                break;

            case 'delete':
                $index = $_GET['index'];
                array_splice($_SESSION['cart'], $index, 1);
                header('Location: ?mod=product&act=cart');
                break;

                case 'checkout':
                    // Xử lý thông tin sản phẩm trong giỏ hàng (load sp trong giỏ hàng)
                    include_once "model/m_products.php";
                    $checkout = $_SESSION['cart'];
                    foreach($checkout as &$check){
                        $detailCart = home_products_getById($check['id_product']);
                        $check['name_products'] = $detailCart['name_products'];
                        $check['img'] = $detailCart['img'];
                        $check['price_products'] = $detailCart['price_products'];
                        $check['subtotal'] = $check['price_products'] * $check['quantity'];
                    }
                    // Hiển thị
                    include_once "view/header.php";
                    include_once "view/checkout.php";
                    include_once "view/footer.php";
                    break;
                case 'process-checkout':
                    // Xử lý
                    if(!isset($_SESSION['cart'])){
                        $_SESSION['cart'] = [];
                    }
                    include_once "model/m_order.php";
                    $id_user = $_SESSION['user']['id_user'];
                    $fullname = $_POST['fullname'];
                    $address = $_POST['address'];
                    $city = $_POST['city'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $note = $_POST['note'];
                    $datetime = date('Y-m-d');
                    $quantity = $_SESSION['quantity'];
                    $total = $_SESSION['total'];
                    // print_r($_POST);
                    // order_add(1,2,1000,'Huy', 'abc', 'HCM', '0123456', 'huy@gmail.com', 'abc', '2021-12-03', 'cart');
                    $id_order = order_add($id_user, $quantity, $total, $fullname, $address, $city, $phone, $email, $note, $datetime, 'cart');
                    foreach($_SESSION['cart'] as $check){
                        order_addDetail($id_order, $check['id_product'], $check['quantity']);
                    }
                    // foreach($_SESSION['cart'] as $check){
                    //     order_addDetail($id_order, $check['id_products'], $check['quantity']);
                    // }
                    unset($_SESSION['cart']);
                    unset($_POST);
                    // Hiển thị
                    include_once "view/header.php";
                    include_once "view/checkoutPass.php";
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