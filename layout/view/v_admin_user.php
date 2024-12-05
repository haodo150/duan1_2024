<section>
    <div class="container">
        <div class="col3">
            <h2>Thêm Mới</h2>
            <form action="admin.php?mod=page&act=postSearchUser" method="post">
                <input type="text" name="search" placeholder="Tìm kiếm người dùng"> 
                <input type="submit" value="Tìm kiếm">
            </form>
            <form>
            <a href="admin.php?mod=page&act=postUserAdd" style="display: inline-block; padding: 10px 100px; background-color: #666;
             color: white; text-align: center; width: 362px; text-decoration: none; border-radius: 5px; font-size: 16px; 
             font-weight: bold; transition: background-color 0.3s ease;">Thêm</a>

            </form>
        </div>
        <div class="col9">
            <h2>Danh Sách</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <!-- <th>Mật Khẩu</th> -->
                        <th>Thao tác</th> <!-- Thêm cột mới -->
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; foreach($userList as $user):?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?=$user['username']?></td>
                        <td><?=$user['email']?></td>
                        <!-- <td><?=$user['password']?></td> -->
                        <td class="action-icons">
                            <a href="?mod=page&act=userUpdate&id=<?=$user['id_user']?>"><i class="fas fa-edit"></i></a>
                            <?php if($user['role'] != 1): ?>
                                <a href="admin.php?mod=page&act=userDelete&id=<?= $user['id_user'] ?>" 
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng này không?')">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            <?php else: ?>
                                <p>🚫</p>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php $i++; endforeach;?>
                    <!-- Các hàng khác -->
                </tbody>
            </table>
        </div>
    </div>
</section>

</body>
</html>