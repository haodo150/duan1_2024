<?php
    if ($_GET['act']){
        switch ($_GET['act']) {
            case 'home':
                // Xử lý
                include_once "model/m_home.php";
                $homeCategories = home_category();
                $homeProductsFeatured = home_products_featured();
                $homeProductsPopuler = home_products_populer();
                $homeProductsAdded = home_products_added();
                $homeProductsArrival = home_products_arrival();
                // Hiển thị
                include_once "view/header.php";
                include_once "view/home.php";
                include_once "view/footer.php";
                break;
                case 'products':
                    // Xử lý
                    include_once "model/m_products.php";
                    $loadSanpham = loadSanpham();
                    // Hiển thị
                    include_once "view/header.php";
                    include_once "view/products.php";
                    include_once "view/footer.php";
                    break;
            case 'compare':
                // Xử lý

                // Hiển thị
                include_once "view/header.php";
                include_once "view/compare.php";
                include_once "view/footer.php";
                break;
            case 'cart':
                // Xử lý
                $cart = $_SESSION['cart'];
                include_once "model/m_home.php";
                foreach($cart as &$products){
                  $detail = home_products_getById($products['id_product']);
                  $products['name_products'] = $detail['name_products'];
                  $products['img'] = $detail['img'];
                  $products['price_products'] = $detail['price_products'];
                  $products['subtotal'] = $products['price_products'] * $products['soluong'];
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

                          $products['soluong']++;
                          
                          $inCart=true;
                          break;
                    }
                }
                //th2: chưa có thêm vào với số lượng =1
                if (!$inCart) {
                    array_push($_SESSION['cart'], 
                    [
                        'id_product' => $id_product,
                        'soluong' => 1 
                    ]);
                }
                $_SESSION['alert'] = "Đã thêm vào giỏ";
                header("Location: ?mod=page&act=detail&id=$id_product");

                break;

                case 'delete':
                    $index = $_GET['index'];
                    array_splice($_SESSION['cart'], $index, 1);
                    header('Location: ?mod=page&act=cart');
                break;



            case 'detail':
                // Xử lý
                include_once "model/m_home.php";
                $productDetail = home_products_getById($_GET['id']);
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