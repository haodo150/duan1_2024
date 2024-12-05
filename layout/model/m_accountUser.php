<?php
include_once "model/pdo.php";

function user_Email($Email) {
    $sql = "SELECT * FROM account_user WHERE email=?";
    $user = pdo_getOne($sql, $Email);
    return isset($user['id_user']);
}

// Đăng ký người dùng mới
function user_register($Username, $Email, $Password, $Role = 0) {
    if (user_Email($Email)) {
        return "Email đã tồn tại!";
    }

    // Mã hóa mật khẩu
    $hashedPassword = md5($Password);  
    $sql = "INSERT INTO account_user(username, email, password, role) VALUES (?, ?, ?, ?)";
    pdo_execute($sql, $Username, $Email, $hashedPassword, $Role);
    return true;
}

// Lấy tất cả người dùng
function user_getAll() {
    $sql = "SELECT * FROM account_user";
    return pdo_getAll($sql);
}

function user_count() {
    $sql = "SELECT COUNT(*) FROM account_user";
    return pdo_getValue($sql); 
}
function user_getById($id) {
    $sql = "SELECT * FROM account_user WHERE id_user = ?";
    $user = pdo_getOne($sql, $id);
    return $user ?: [
        'username' => '',
        'email' => '',
        'password' => '',
        'role' => 0
    ]; // Giá trị mặc định nếu không có dữ liệu
}

function user_update($id_user, $username, $email, $password, $role) {
    $sql = "UPDATE account_user 
            SET username = ?, email = ?, password = ?, role = ? 
            WHERE id_user = ?";
    pdo_execute($sql, $username, $email, $password, $role, $id_user);
}
function user_delete($id_user) {
    $sql = "DELETE FROM account_user WHERE id_user = ?";
    pdo_execute($sql, $id_user);
}

?>