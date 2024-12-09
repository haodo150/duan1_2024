<?php
include_once "model/pdo.php";

// Hàm thêm danh mục vào cơ sở dữ liệu
function category_add($name_categories, $img) {
    // Kiểm tra xem người dùng có chọn ảnh hay không
    if (empty($img['name'])) {
        return "Vui lòng chọn ảnh danh mục!";
    }

    // Kiểm tra xem ảnh có phải là tệp hợp lệ (JPEG, PNG, GIF)
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $fileType = mime_content_type($img['tmp_name']);
    
    if (!in_array($fileType, $allowedTypes)) {
        return "Tệp không phải là ảnh hợp lệ! Chỉ chấp nhận JPEG, PNG hoặc GIF.";
    }

    // Kiểm tra kích thước ảnh (Giới hạn 5MB)
    $maxSize = 5 * 1024 * 1024;  // 5MB
    if ($img['size'] > $maxSize) {
        return "Ảnh quá lớn! Vui lòng chọn ảnh có kích thước dưới 5MB.";
    }

    // Xác định đường dẫn lưu ảnh
    $targetDir = "public/assets/img/";
    $targetFile = $targetDir . basename($img["name"]);

    // Kiểm tra xem ảnh đã tồn tại chưa
    if (file_exists($targetFile)) {
        return "Ảnh đã tồn tại! Vui lòng chọn ảnh khác.";
    }

    // Di chuyển ảnh từ thư mục tạm thời tới thư mục đích
    if (move_uploaded_file($img["tmp_name"], $targetFile)) {
        // Thêm danh mục vào cơ sở dữ liệu
        $sql = "INSERT INTO categories(name_categories, img) VALUES (?, ?)";
        pdo_execute($sql, $name_categories, $targetFile);

        return "Danh mục đã được thêm thành công!";
    } else {
        return "Có lỗi khi tải ảnh lên! Vui lòng thử lại.";
    }
}

// Cập nhật danh mục
function category_update($id, $name, $img) {
    $sql = "UPDATE categories SET name_categories = ?, img = ? WHERE id_categories = ?";
    pdo_execute($sql, $name, $img, $id);
}

// Xóa danh mục
function category_delete($id) {
    $sql = "DELETE FROM categories WHERE id_categories = ?";
    pdo_execute($sql, $id);
}

// Lấy tất cả danh mục
function category_getAll() {
    return pdo_getAll("SELECT * FROM categories");
}

// Lấy danh mục theo ID
function category_getById($id) {
    return pdo_getOne("SELECT * FROM categories WHERE id_categories = ?", $id);
}
?>
