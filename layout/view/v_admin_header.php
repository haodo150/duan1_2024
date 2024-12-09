<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<!-- Thêm thư viện Chart.js từ CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="public/assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<header>
    <h1>Trang Quản Trị</h1>
</header>

<nav>
    <ul>
        <li><a href="admin.php?mod=page&act=dashboard">Trang Chủ</a></li>
        <li><a href="admin.php?mod=page&act=categories">Thương Hiệu Giầy</a></li>
        <li><a href="admin.php?mod=page&act=product">Sản phẩm</a></li>
        <li><a href="admin.php?mod=page&act=user">Người dùng</a></li>
        <li><a href="admin.php?mod=page&act=donhang">Đơn hàng</a></li>
        <li><a href="admin.php?mod=page&act=add"></a></li>
        <li><a href="admin.php?mod=page&act=update"></a></li>
        <li><a href="index.php?mod=page&act=home">Về trang chủ</a></li>
        <li><a href="index.php?mod=user&act=logout">Đăng xuất</a></li>
      
    </ul>
</nav>