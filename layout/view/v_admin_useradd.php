<section>
    <div class="col3">
        <h2>Thêm Người Dùng Mới</h2>
        <form method="POST" action="admin.php?mod=page&act=postUserAdd" enctype="multipart/form-data">
            <label for="username">Tên người dùng:</label><br>
            <input type="text" name="username" id="username" required><br>
            
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" required><br>
            
            <label for="password">Mật khẩu:</label><br>
            <input type="password" name="password" id="password" required><br>
            
            <label for="role">Vai trò:</label><br>
            <select name="role" id="role">
                <option value="0">Người dùng</option>
                <option value="1">Quản trị viên</option>
            </select><br>
            
            <input type="submit" name="submit" value="Thêm người dùng">
        </form>
    </div>
</section>
</body>
</html>