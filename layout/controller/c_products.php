<?php
    if ($_GET['act']){
        switch ($_GET['act']) {
            case 'detail':
                // Xử lý
                include_once "model/m_products.php";
                $productDetail = home_products_getById($_GET['id']);
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
                include_once "model/m_order.php";
                $user = $_SESSION['user']['id_user'];
                $datetime = date('Y-m-d');
                $quantity = $_SESSION['quantity'];
                $total = $_SESSION['total'];
                break;
            default:
                # code...
                break;
        }
    } else {
        header("Location: ?mod=page&act=home");
    }
?>