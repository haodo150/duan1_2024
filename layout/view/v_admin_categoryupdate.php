<section>
    <div class="col3">
        <h2>Sửa Danh Mục</h2>

        <?php if (isset($category) && $category): ?>
            <form method="POST" action="admin.php?mod=page&act=categoryUpdate&id=<?php echo $category['id_categories']; ?>" enctype="multipart/form-data">
                
                <label for="name_categories">Tên Danh Mục:</label>
                <input type="text" id="name_categories" name="name_categories" value="<?php echo htmlspecialchars($category['name_categories']); ?>" required><br>

                <label for="img">Ảnh Danh Mục:</label>
                <input type="file" id="img" name="img" accept="image/*"><br>
                <p>Ảnh hiện tại: <img src="<?php echo $category['img']; ?>" alt="Current Image" width="100"></p>
                
                <input type="submit" name="submit" value="Cập nhật danh mục">
            </form>
        <?php else: ?>
            <p>Không tìm thấy thông tin danh mục.</p>
        <?php endif; ?>
    </div>
</section>
</body>
</html>
