<?php
// Kiểm tra dữ liệu `$user`
if (!isset($user) || !$user || !is_array($user)) {
    echo "<p>Không tìm thấy thông tin người dùng.</p>";
    $user = [
        'username' => '',
        'email' => '',
        'password' => '',
        'role' => 0
    ];
}
?>
<section>
    <div class="col3">
        <h2>Cập nhật người dùng</h2>
        <form method="POST" action="">
            <label for="username">Tên người dùng:</label><br>
            <input type="text" name="username" id="username" value="<?= htmlspecialchars($user['username'], ENT_QUOTES) ?>" required><br>
            
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" value="<?= htmlspecialchars($user['email'], ENT_QUOTES) ?>" required><br>
            
            <label for="password">Mật khẩu:</label><br>
            <input type="password" name="password" id="password" value="<?= htmlspecialchars($user['password'], ENT_QUOTES) ?>" required><br>
            
            <label for="role">Vai trò:</label><br>
            <select name="role" id="role">
                <option value="0" <?= $user['role'] == 0 ? 'selected' : '' ?>>Người dùng</option>
                <option value="1" <?= $user['role'] == 1 ? 'selected' : '' ?>>Quản trị viên</option>
            </select><br>
            
            <input type="submit" name="submit" value="Lưu">
        </form>
    </div>
</section>