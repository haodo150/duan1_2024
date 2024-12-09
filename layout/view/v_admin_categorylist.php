
<section>
    <div class="container">
    <div class="col3">
            <h2>Thêm Mới</h2>
            <form>
            <a href="admin.php?mod=page&act=categoryAdd" style="display: inline-block; padding: 10px 100px; background-color: #666;
             color: white; text-align: center; width: 362px; text-decoration: none; border-radius: 5px; font-size: 16px; 
             font-weight: bold; transition: background-color 0.3s ease;">Thêm</a>

            </form>
        </div>
        <div class="col9">
        <h2>Danh Sách Thương Hiệu</h2>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Hình ảnh</th>
                    <th>Hành động</th>
                </tr>
                <?php foreach ($categoryList as $category): ?>
                <tr>
                    <td><?= $category['id_categories'] ?></td>
                    <td><?= htmlspecialchars($category['name_categories']) ?></td>
                    <td><img src="<?= htmlspecialchars($category['img']) ?>" style="width:100px;"></td>
                    <td class="action-icons">
                        <a href="admin.php?mod=page&act=categoryUpdate&id=<?= $category['id_categories'] ?>"><i class="fas fa-edit"></i></a>
                        <a href="admin.php?mod=page&act=categoryDelete&id=<?php echo $category['id_categories']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</section>
</body>
</html>
